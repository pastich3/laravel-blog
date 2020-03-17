<?php

namespace Tatham\Workflow\Processing\WorkflowProgressionPolicies;

use Tatham\Workflow\Processing\BaseProcessRouter;
use Tatham\Workflow\Models\WorkflowProgressionPolicy;

class WorkflowProgressionPolicyProcessRouter extends BaseProcessRouter {

    protected $progressionPolicy;

    protected function postConstruct()
    {
        $this->progressionPolicy = $this->componentInstance->workflowComponent->currentComponent;
    }

    public function process()
    {
        $result = null;
        switch ($this->progressionPolicy->id)
        {
            case WorkflowProgressionPolicy::OR: {
                $result = (new WorkflowOrProgressionPolicyProcessor($this->componentInstance))->process();
                break;
            }
            case WorkflowProgressionPolicy::AND: {
                $result = (new WorkflowAndProgressionPolicyProcessor($this->componentInstance))->process();
                break;
            }
            case WorkflowProgressionPolicy::NOT: {
                $result = (new WorkflowNotProgressionPolicyProcessor($this->componentInstance))->process();
                break;
            }
            case WorkflowProgressionPolicy::XOR: {
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

