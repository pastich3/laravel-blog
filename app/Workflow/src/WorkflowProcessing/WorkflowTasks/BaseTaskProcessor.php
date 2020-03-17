<?php

namespace Tatham\Workflow\Processing\WorkflowTasks;

use Tatham\Workflow\Processing\BaseProcessor;

abstract class BaseTaskProcessor extends BaseProcessor {

    protected $workflowTask;

    protected function postConstruct()
    {
        $this->workflowTask = $this->componentInstance->workflowComponent->currentComponent;
    }

    protected function passesEntranceCriteria() : bool
    {
        return true; // default; overrideable by subclasses
    }

    public final function process()
    {
        $result = null;
        if ($this->passesEntranceCriteria())
        {
            if ($this->processTask())
            {
                $this->markInstanceCompleted();
                $this->postSuccessfulTask();
            }
            else
            {
                $this->postUnsuccessfulTask();
            }
        }
        return $result;
    }

    /**
     * The main meat of the task-processor-subclasses.
     */
    abstract protected function processTask() : bool;

    /**
     * Allows tasks to do some post-processing if required, such as cleaning up data
     */
    protected function postSuccessfulTask()
    {
        return true; // overrideable by subclasses
    }

    /**
     * Allows tasks to do some post-processing if required, such as cleaning up data
     */
    protected function postUnsuccessfulTask()
    {
        return true; // overrideable by subclasses
    }
}

