<?php

namespace Tatham\Workflow\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use Tatham\Workflow\Events\ComponentInstanceCompleted;
use Tatham\Workflow\Listeners\TryProcessNextWorkflowComponent;

class WorkflowEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ComponentInstanceCompleted::class => [
            TryProcessNextWorkflowComponent::class
        ]
    ];
}
