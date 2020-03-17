<?php

namespace Tatham\Workflow\Processing\WorkflowTasks;

use Tatham\Workflow\Processing\BaseProcessRouter;
use Tatham\Workflow\Models\WorkflowTaskTypeMap;

class WorkflowTaskProcessRouter extends BaseProcessRouter {

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
            case WorkflowTaskTypeMap::UNCATEGORIZED: {
                $result = (new WorkflowUncategorizedTaskProcessRouter($this->componentInstance))->process();
                break;
            }
            case WorkflowTaskTypeMap::COMMUNICATION: {
                $result = (new WorkflowCommunicationTaskProcessRouter($this->componentInstance))->process();
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

