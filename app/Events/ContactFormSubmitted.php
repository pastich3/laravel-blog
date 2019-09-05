<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ContactFormSubmitted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $contact_info_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(int $contact_info_id)
    {
        $this->contact_info_id = $contact_info_id;
    }

    public function getContactInfoId()
    {
        return $this->contact_info_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
