<?php

namespace App\Workflow\Processing;

use App\Workflow\Models\WorkflowMorphMap;
use App\Workflow\Models\WorkflowComponentInstance;

class WorkflowComponentProcessor {

    protected $componentInstance;
    protected $currentComponent;
    protected $nextComponent;

    public function __construct(WorkflowComponentInstance $componentInstance)
    {
        $this->componentInstance = $componentInstance;
        $this->currentComponent = $componentInstance->workflowComponent->currentComponent;
        $this->nextComponent = $componentInstance->workflowComponent->nextComponent;
        $this->currentComponentType = WorkflowMorphMap::CLASS_TO_INT_MAP[get_class($this->currentComponent)];
        $this->nextComponentType = WorkflowMorphMap::CLASS_TO_INT_MAP[get_class($this->nextComponent)];
    }

}

