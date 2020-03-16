<?php

namespace App\Workflow\Processing;

use App\Workflow\Models\WorkflowMorphMap;
use App\Workflow\Models\WorkflowComponentInstance;
use App\Workflow\Processing\WorkflowTasks\WorkflowTaskProcessor;

class WorkflowComponentProcessor {

    protected $componentInstance;
    protected $currentComponent;
    protected $currentComponentTypeId;
    /*protected $nextComponent;
    protected $nextComponentTypeId;*/

    public function __construct(WorkflowComponentInstance $componentInstance)
    {
        $this->componentInstance = $componentInstance;
        $this->currentComponent = $componentInstance->workflowComponent->currentComponent;
        $this->currentComponentTypeId = WorkflowMorphMap::CLASS_TO_INT_MAP[get_class($this->currentComponent)];
        /*$this->nextComponent = $componentInstance->workflowComponent->nextComponent;
        $this->nextComponentTypeId = WorkflowMorphMap::CLASS_TO_INT_MAP[get_class($this->nextComponent)];*/
    }

    public function process()
    {
        $result = null;
        switch ($this->currentComponentTypeId)
        {
            case WorkflowMorphMap::TASK: {
                $result = new WorkflowTaskProcessor($this->componentInstance, $this->currentComponent)->process();
                break;
            }
            case WorkflowMorphMap::PROGRESSION_POLICY: {
                break;
            }
            case WorkflowMorphMap::WORKFLOW: {
                break;
            }
            default: {
                throw new \Exception(
                    'Unknown component type id at ' __FILE__ . ':' . __LINE__ . PHP_EOL
                    . 'Component type id: ' . $this->currentComponentTypeId . PHP_EOL
                    . 'Component instance id: ' . $this->componentInstance->id . PHP_EOL
                );
                break;
            }
        }
        return $result;
    }

}

