<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Jobs\SendContactFormSubmittedNotification as SendContactFormSubmittedNotificationJob;

class SendContactFormSubmittedNotification
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
        if (config('app.env') == 'production')
        {
            SendContactFormSubmittedNotificationJob::dispatch($event->getContactInfoId());
        }
    }
}
