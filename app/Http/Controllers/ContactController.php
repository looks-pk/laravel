<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

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

        // Send email
        Mail::to(config('mail.from.address'))->send(new ContactFormSubmitted($validated));

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
} 