<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmittedNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $contactInfo;

    /**
     * Create a new message instance.
     */
    public function __construct($contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * Build the message.
     */
    public function build(): ContactSubmittedNotification
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject(__('tatham.email.contact_submitted.notification_subject'))
                    ->view('emails.tatham.contact_submitted_notification', [
                        'contactInfo' => $this->contactInfo
                    ]);
    }
}
