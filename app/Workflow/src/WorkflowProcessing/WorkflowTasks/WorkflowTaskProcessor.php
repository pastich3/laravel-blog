<?php

namespace App\Workflow\Processing\WorkflowTasks;

use App\Workflow\Models\WorkflowComponentInstance;
use App\Workflow\Models\WorkflowTask;
use App\Workflow\Models\WorkflowTaskTypeMap;

class WorkflowTaskProcessor {

    protected $componentInstance;
    protected $workflowTask;

    public function __construct(WorkflowComponentInstance $componentInstance, WorkflowTask $workflowTask)
    {
        $this->componentInstance = $componentInstance;
        $this->workflowTask = $workflowTask;
    }

    public function process()
    {
        $result = null;
        switch ($this->workflowTask->type)
        {
            case WorkflowTaskTypeMap::REMINDER: {
                $result = (new WorkflowReminderTaskProcessor($this->componentInstance, $this->workflowTask))->process();
                break;
            }
            case WorkflowTaskTypeMap::USER_ACTION: {
                break;
            }
            default: {
                throw new \Exception(
                    'Unknown task type id at ' . __FILE__ . ':' . __LINE__ . PHP_EOL
                    . 'Task type id: ' . $this->currentComponentTypeId . PHP_EOL
                    . 'Component instance id: ' . $this->componentInstance->id . PHP_EOL
                );
                break;
            }
        }
        return $result;
    }

}

