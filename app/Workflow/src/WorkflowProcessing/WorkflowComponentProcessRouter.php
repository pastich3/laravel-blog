<?php

namespace App\Workflow\Processing;

use App\Workflow\Models\WorkflowMorphMap;
use App\Workflow\Processing\WorkflowTasks\WorkflowTaskProcessRouter;
use App\Workflow\Processing\WorkflowProgressionPolicies\WorkflowProgressionPolicyProcessRouter;

class WorkflowComponentProcessRouter extends BaseProcessRouter {

    protected $currentComponentTypeId;

    protected function postConstruct()
    {
        $currentComponent = $this->componentInstance->workflowComponent->currentComponent;
        $this->currentComponentTypeId = WorkflowMorphMap::CLASS_TO_INT_MAP[get_class($currentComponent)];
    }

    public function process()
    {
        if (isset($this->componentInstance->completed_at))
        {
            return null;
        }

        $result = null;
        switch ($this->currentComponentTypeId)
        {
            case WorkflowMorphMap::TASK: {
                $result = (new WorkflowTaskProcessRouter($this->componentInstance))->process();
                break;
            }
            case WorkflowMorphMap::PROGRESSION_POLICY: {
                $result = (new WorkflowProgressionPolicyProcessRouter($this->componentInstance))->process();
                break;
            }
            case WorkflowMorphMap::WORKFLOW: {
                break;
            }
            default: {
                throw new \Exception(
                    'Unknown component type id at ' . __FILE__ . ':' . __LINE__ . PHP_EOL
                    . 'Component type id: ' . $this->currentComponentTypeId . PHP_EOL
                    . 'Component instance id: ' . $this->componentInstance->id . PHP_EOL
                );
                break;
            }
        }
        return $result;
    }

}

