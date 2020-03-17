<?php

namespace App\Workflow\Processing\WorkflowTasks;

use App\Workflow\Processing\BaseProcessRouter;

use App\Workflow\Models\WorkflowTask;

class WorkflowCommunicationTaskProcessRouter extends BaseProcessRouter {

    protected $workflowTask;

    protected function postConstruct()
    {
        $this->workflowTask = $this->componentInstance->workflowComponent->currentComponent;
    }

    public function process()
    {
        $result = null;
        switch ($this->workflowTask->id)
        {
            case WorkflowTask::SEND_REMINDER: {
                $result = (new WorkflowReminderTaskProcessor($this->componentInstance))->process();
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

