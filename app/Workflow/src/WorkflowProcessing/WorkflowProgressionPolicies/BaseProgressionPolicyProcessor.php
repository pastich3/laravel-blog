<?php

namespace Tatham\Workflow\Processing\WorkflowProgressionPolicies;

use Tatham\Workflow\Processing\BaseProcessor;

abstract class BaseProgressionPolicyProcessor extends BaseProcessor {

    protected $progressionPolicy;

    protected function postConstruct()
    {
        $this->progressionPolicy = $this->componentInstance->workflowComponent->currentComponent;
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
            if ($this->processPolicy())
            {
                $this->markInstanceCompleted();
                $this->postSuccessfulPolicy();
            }
            else
            {
                $this->postUnsuccessfulPolicy();
            }
        }
        return $result;
    }

    /**
     * The main meat of the task-processor-subclasses.
     */
    abstract protected function processPolicy() : bool;

    /**
     * Allows tasks to do some post-processing if required, such as cleaning up data
     */
    protected function postSuccessfulPolicy()
    {
        return true; // overrideable by subclasses
    }

    /**
     * Allows tasks to do some post-processing if required, such as cleaning up data
     */
    protected function postUnsuccessfulPolicy()
    {
        return true; // overrideable by subclasses
    }
}

