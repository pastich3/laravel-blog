<?php

namespace App\Workflow\Processing\WorkflowProgressionPolicies;

use App\Workflow\Processing\WorkflowProgressionPolicies\BaseProgressionPolicyProcessor;

class WorkflowNotProgressionPolicyProcessor extends BaseProgressionPolicyProcessor {

    public function processPolicy() : bool
    {
        $result = null;
        echo "policy " . get_class($this) . PHP_EOL;

        $result = true;

        return $result;
    }

}

