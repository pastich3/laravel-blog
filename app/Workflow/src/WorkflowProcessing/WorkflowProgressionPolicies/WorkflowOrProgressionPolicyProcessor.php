<?php

namespace Tatham\Workflow\Processing\WorkflowProgressionPolicies;

use Tatham\Workflow\Processing\WorkflowProgressionPolicies\BaseProgressionPolicyProcessor;

use Tatham\Workflow\Models\WorkflowComponent;

class WorkflowOrProgressionPolicyProcessor extends BaseProgressionPolicyProcessor {

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
            // should be only 1 instance due to the user_id constraint
            if (isset($component->componentInstances->first()->completed_at))
            {
                $result = true;
                break;
            }
        }

        return $result;
    }

}

