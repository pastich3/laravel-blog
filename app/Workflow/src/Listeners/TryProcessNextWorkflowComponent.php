<?php

namespace App\Workflow\Listeners;

use App\Workflow\Events\ComponentInstanceCompleted;

class TryProcessNextWorkflowComponent
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
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(ComponentInstanceCompleted $event)
    {
        echo "listened\n";
        $componentInstance = $event->getComponentInstance();
    }
}
