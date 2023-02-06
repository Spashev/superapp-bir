<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    private array $message;

    public function __construct(array $message)
    {
        $this->message = $message;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->message['from'], $this->message['name']),
            subject: $this->message['subject'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.account.create',
            with: [
                'body' => $this->message['body']
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
