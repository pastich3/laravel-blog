<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Mail;
use App\Mail\ContactSubmittedNotification;
use App\Models\ContactInfo;
use App\Models\User;

class SendContactFormSubmittedNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contactInfoId;

    /**
     * Create a new job instance.
     */
    public function __construct($contactInfoId)
    {
        $this->contactInfoId = $contactInfoId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $contactInfo = ContactInfo::find($this->contactInfoId);

        $users = User::canReceiveContactEmailNotifications()->get();

        foreach ($users as $user)
        {
            Mail::to($user->email)->send(new ContactSubmittedNotification($contactInfo));
        }
    }
}
