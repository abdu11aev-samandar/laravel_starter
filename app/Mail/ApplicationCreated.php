<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public Application $application;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Application $application)
    {
        return $this->application = $application;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Application Created',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        $mail = $this->from('example@example.com', 'Example')
            ->subject('Application Created')
            ->view('emails.application-created');

        if (!is_null($this->application->file_url)) {
            $mail->attachFromStorageDisk('public', $this->application->file_url);
        }

        return $mail;
    }
}
