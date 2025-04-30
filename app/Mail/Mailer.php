<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    public $Mailmessage;
    public $subject;
    public $Mailname;
    public $Mailorganization;
    public $Mailemail;
    public $Mailnumber;
    /**
     * Create a new message instance.
     */
    public function __construct($message, $subject, $name, $organization, $email, $number)
    {
        $this->Mailmessage = $message;
        $this->subject = $subject;
        $this->Mailname = $name;
        $this->Mailorganization = $organization;
        $this->Mailemail = $email;
        $this->Mailnumber = $number;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
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
