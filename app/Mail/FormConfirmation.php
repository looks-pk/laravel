<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public string $submitterName;
    public string $formName;

    public function __construct(string $submitterName, string $formName)
    {
        $this->submitterName = $submitterName;
        $this->formName      = $formName;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We received your request — ' . config('app.name'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.form-confirmation',
            with: [
                'submitterName' => $this->submitterName,
                'formName'      => $this->formName,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
