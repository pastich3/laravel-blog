<?php

namespace App\Workflow\Processing\WorkflowProgressionPolicies;

use App\Workflow\Processing\BaseProcessRouter;

class WorkflowTaskProcessRouter extends BaseProcessRouter {

    protected $progressionPolicy;

    protected function postConstruct()
    {
        $this->progressionPolicy = $this->componentInstance->workflowComponent->currentComponent;
    }

    public function process()
    {
        $result = null;
        switch ($this->workflowTask->type)
        {
            case WorkflowProgresionPolicy::OR: {
                $result = (new WorkflowOrProgressionPolicyProcessor($this->componentInstance))->process();
                break;
            }
            case WorkflowProgresionPolicy::AND: {
                $result = (new WorkflowAndProgressionPolicyProcessor($this->componentInstance))->process();
                break;
            }
            case WorkflowProgresionPolicy::NOT: {
                $result = (new WorkflowNotProgressionPolicyProcessor($this->componentInstance))->process();
                break;
            }
            case WorkflowProgresionPolicy::XOR: {
                $result = (new WorkflowXorProgressionPolicyProcessor($this->componentInstance))->process();
                break;
            }
            default: {
                throw new \Exception(
                    'Unknown progression policy id at ' . __FILE__ . ':' . __LINE__ . PHP_EOL
                    . 'Progression policy id: ' . $this->progressionPolicy->id . PHP_EOL
                    . 'Component instance id: ' . $this->componentInstance->id . PHP_EOL
                );
                break;
            }
        }
        return $result;
    }

}

