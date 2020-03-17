<?php

namespace Tatham\Workflow\Processing\WorkflowProgressionPolicies;

use Tatham\Workflow\Processing\WorkflowProgressionPolicies\BaseProgressionPolicyProcessor;

class WorkflowXorProgressionPolicyProcessor extends BaseProgressionPolicyProcessor {

    public function processPolicy() : bool
    {
        $result = false;

        $previousComponents = WorkflowComponent::with([
            'previousWorkflowComponents.componentInstances' => function($query) {
                $query->where('user_id', $this->componentInstance->user_id);
            }
        ])->find($this->componentInstance->workflowComponent->id);

        foreach ($previousComponents->previousWorkflowComponents as $component)
        {
            // if an instance was completed, but so was another, return false
            if ($result == true && isset($component->componentInstances->first()->completed_at))
            {
                $result = false;
                break;
            }
            // should be only 1 instance due to the user_id constraint
            if (isset($component->componentInstances->first()->completed_at))
            {
                $result = true;
            }
        }

        return $result;
    }

}

