<?php

namespace Tatham\Workflow\Processing;

use Tatham\Workflow\Models\WorkflowComponentInstance;

use Tatham\Workflow\Events\ComponentInstanceCompleted;

abstract class BaseProcessor {

    protected $componentInstance;

    public final function __construct(WorkflowComponentInstance $componentInstance)
    {
        $this->componentInstance = $componentInstance;
        $this->postConstruct(); // optional for subclasses
    }

    protected function postConstruct() {} // optional, overrideable

    abstract public function process();

    protected function markInstanceCompleted()
    {
        $this->componentInstance->completed_at = date('Y-m-d H:i:s');
        $this->componentInstance->save();

        event(new ComponentInstanceCompleted($this->componentInstance));
    }

}

