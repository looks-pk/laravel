<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UniversalFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $formName;
    public $emailSubject;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->formData = $data['form_data'] ?? [];
        $this->formName = $data['form_name'] ?? 'Contact Form';
        $this->emailSubject = $data['subject'] ?? 'New Form Submission';
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->emailSubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.universal-form-submission',
            with: [
                'formData' => $this->formData,
                'formName' => $this->formName,
                'submissionTime' => now(),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
} 