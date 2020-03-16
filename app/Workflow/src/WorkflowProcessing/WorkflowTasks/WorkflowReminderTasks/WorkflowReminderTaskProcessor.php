<?php

namespace App\Workflow\Processing\WorkflowTasks;

use App\Workflow\Models\WorkflowComponentInstance;
use App\Workflow\Models\WorkflowTask;

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
        switch ($this->workflowTask->id)
        {
            case WorkflowTask::TWO_WEEK_REMINDER: {
                // $result = (2 weeks until meeting ? sendMail(reminder))
                echo "TWO WEEK REMINDER" . PHP_EOL;
                $this->componentInstance->completed_at = date('Y-m-d H:i:s');
                $this->componentInstance->save();
                break;
            }
            default: {
                throw new \Exception(
                    'Unknown task id at ' . __FILE__ . ':' . __LINE__ . PHP_EOL
                    . 'Task id: ' . $this->workflowTask->id . PHP_EOL
                    . 'Component instance id: ' . $this->componentInstance->id . PHP_EOL
                );
                break;
            }
        }
        return $result;
    }

}

