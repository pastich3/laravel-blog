<?php

namespace App\Workflow\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use App\Workflow\Events\ComponentInstanceCompleted;
use App\Workflow\Listeners\TryProcessNextWorkflowComponent;

class WorkflowEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ComponentInstanceCompleted::class => [
            TryProcessNextWorkflowComponent::class
        ]
    ];
}
