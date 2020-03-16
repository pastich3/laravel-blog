<?php

namespace App\Workflow\Processing\WorkflowProgressionPolicies;

use App\Workflow\Processing\WorkflowProgressionPolicies\BaseProgressionPolicyProcessor;

class WorkflowOrProgressionPolicyProcessor extends BaseProgressionPolicyProcessor {

    public function processPolicy() : bool
    {
        $result = null;
        echo "policy" . PHP_EOL;

        $result = true;

        return $result;
    }

}

