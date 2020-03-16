<?php

namespace App\Workflow\Processing;

use App\Workflow\Models\WorkflowComponentInstance;

use App\Workflow\Events\ComponentInstanceCompleted;

abstract class BaseProcessor {

    protected $componentInstance;

    public final function __construct(WorkflowComponentInstance $componentInstance)
    {
        $this->componentInstance = $componentInstance;
        $this->postConstruct(); // optional for subclasses
    }

    protected function postConstruct() {} // optional, overrideable

    protected function markInstanceCompleted(array $metaData=[])
    {
        $this->componentInstance->setMeta($metaData);
        $this->componentInstance->completed_at = date('Y-m-d H:i:s');
        $this->componentInstance->save();

        event(new ComponentInstanceCompleted($this->componentInstance));
    }

}

