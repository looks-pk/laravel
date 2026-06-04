<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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