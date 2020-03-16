<?php

namespace App\Workflow\Events;

use App\Workflow\Models\WorkflowComponentInstance;

class ComponentInstanceCompleted {

    protected $componentInstance;

    public function __construct(WorkflowComponentInstance $componentInstance)
    {
        $this->componentInstance = $componentInstance;
    }

    public function getComponentInstance()
    {
        return $this->componentInstance;
    }

}
