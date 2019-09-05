<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Jobs\SendContactFormSubmittedConfirmation as SendContactFormSubmittedConfirmationJob;

class SendContactFormSubmittedConfirmation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactFormSubmitted  $event
     * @return void
     */
    public function handle(ContactFormSubmitted $event)
    {
        SendContactFormSubmittedConfirmationJob::dispatch($event->getContactInfoId());
    }
}
