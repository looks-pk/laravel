<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\ContactFormSubmitted;
use App\Mail\FormConfirmation;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
       // 1. Honeypot Security Check
        if (!empty($request->input('website_url_hp'))) {
            return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
        }

        // 2. Cloudflare Turnstile Verification Check
        $turnstileResponse = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret'   => env('TURNSTILE_SECRET_KEY'),
            'response' => $request->input('cf-turnstile-response'),
            'remoteip' => $request->ip(),
        ]);

        $turnstileData = $turnstileResponse->json();

        if (empty($turnstileData['success']) || !$turnstileData['success']) {
            return redirect()->back()->withErrors(['captcha' => 'Spam verification failed. Please try again.'])->withInput();
        }

        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
            'service' => 'nullable|string',
        ]);

        // Notify business
        Mail::to(config('mail.from.address'))->cc('meetpaulmason@gmail.com')->send(new ContactFormSubmitted($validated));

        // Confirm to submitter
        Mail::to($validated['email'])->send(new FormConfirmation($validated['name'], 'Contact Form'));

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
} 
