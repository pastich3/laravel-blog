<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Mail;
use App\Mail\ContactSubmittedConfirmation;
use App\Models\ContactInfo;

class SendContactFormSubmittedConfirmation implements ShouldQueue
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
        Mail::to($contactInfo->email)->send(new ContactSubmittedConfirmation($contactInfo));
    }
}
