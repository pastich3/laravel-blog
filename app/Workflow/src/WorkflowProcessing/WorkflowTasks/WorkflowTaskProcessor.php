<?php

namespace App\Workflow\Processing\WorkflowTasks;

use App\Workflow\Processing\BaseProcessor;
use App\Workflow\Models\WorkflowComponentInstance;
use App\Workflow\Models\WorkflowTask;
use App\Workflow\Models\WorkflowTaskTypeMap;

class WorkflowTaskProcessor extends BaseProcessor {

    protected $workflowTask;

    protected function postConstruct()
    {
        $this->workflowTask = $this->componentInstance->workflowComponent->currentComponent;
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
                    . 'Task type id: ' . $this->workflowTask->type . PHP_EOL
                    . 'Component instance id: ' . $this->componentInstance->id . PHP_EOL
                );
                break;
            }
        }
        return $result;
    }

}

