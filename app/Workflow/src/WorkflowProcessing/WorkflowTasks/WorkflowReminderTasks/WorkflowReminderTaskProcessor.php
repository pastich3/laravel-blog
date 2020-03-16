<?php

namespace App\Workflow\Processing\WorkflowTasks;

use App\Workflow\Processing\BaseProcessor;
use App\Workflow\Models\WorkflowComponentInstance;
use App\Workflow\Models\WorkflowTask;

class WorkflowTaskProcessor extends BaseProcessor {

    protected $workflowTask;

    protected function postConstruct()
    {
        $this->workflowTask = $this->componentInstance->workflowComponent->currentComponent;
    }

    public function process()
    {
        $result = null;
        echo "TWO WEEK REMINDER" . PHP_EOL;
        $this->markInstanceCompleted();

        return $result;
    }

}

