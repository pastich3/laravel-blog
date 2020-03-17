<?php

namespace Tatham\Workflow\Listeners;

use Tatham\Workflow\Events\ComponentInstanceCompleted;

use Tatham\Workflow\Processing\WorkflowComponentProcessRouter;

use Tatham\Workflow\Models\WorkflowComponentInstance;
use Tatham\Workflow\Models\WorkflowMorphMap;

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
     * @param  \Tatham\Events\OrderShipped  $event
     * @return void
     */
    public function handle(ComponentInstanceCompleted $event)
    {
        $componentInstance = $event->getComponentInstance();

        $updatedInstance = WorkflowComponentInstance::with('workflowComponent.nextWorkflowComponents.currentComponent')
            ->find($componentInstance->id);

        $nextComponents = $updatedInstance->workflowComponent->nextWorkflowComponents;

        foreach ($nextComponents as $nextComponent)
        {
            // prep a new instance of the next component
            $instance = WorkflowComponentInstance::firstOrCreate([
                'workflow_component_id' => $nextComponent->id,
                'user_id' => $componentInstance->user_id
            ]);
            // if the next component is a task with pre-requisites, it won't process, just do set-up (if needed)
            // but if its a progression policy or simple/auto-complete task, it will process straight through
            $processor = new WorkflowComponentProcessRouter($instance);
            $processor->process();
        }
    }
}
