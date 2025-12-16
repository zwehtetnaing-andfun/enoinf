<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $recipient;

    /**
     * Create a new message instance.
     */
    public function __construct($formData, $recipient = 'admin')
    {
        $this->formData = $formData;
        $this->recipient = $recipient;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if ($this->recipient === 'customer') {
            return new Envelope(
                subject: 'お問い合わせありがとうございます - 株式会社エヴォルブド・インフォ',
            );
        }

        return new Envelope(
            subject: '【お問い合わせ】' . $this->formData['yourname'] . '様より',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if ($this->recipient === 'customer') {
            return new Content(
                view: 'emails.contact-customer',
            );
        }

        return new Content(
            view: 'emails.contact-admin',
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
