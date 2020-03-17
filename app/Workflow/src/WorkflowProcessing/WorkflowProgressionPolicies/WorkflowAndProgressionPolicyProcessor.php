<?php

namespace App\Workflow\Processing\WorkflowProgressionPolicies;

use App\Workflow\Processing\WorkflowProgressionPolicies\BaseProgressionPolicyProcessor;

class WorkflowAndProgressionPolicyProcessor extends BaseProgressionPolicyProcessor {

    public function processPolicy() : bool
    {
        $result = true;

        $previousComponents = WorkflowComponent::with([
            'previousWorkflowComponents.componentInstances' => function($query) {
                $query->where('user_id', $this->componentInstance->user_id);
            }
        ])->find($this->componentInstance->workflowComponent->id);

        foreach ($previousComponents->previousWorkflowComponents as $component)
        {
            // should be only 1 instance due to the user_id constraint
            if (!isset($component->componentInstances->first()->completed_at))
            {
                $result = false;
                break;
            }
        }

        return $result;
    }

}

