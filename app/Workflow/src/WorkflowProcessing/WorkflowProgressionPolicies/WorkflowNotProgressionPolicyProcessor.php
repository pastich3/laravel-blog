<?php

namespace App\Workflow\Processing\WorkflowProgressionPolicies;

use App\Workflow\Processing\WorkflowProgressionPolicies\BaseProgressionPolicyProcessor;

class WorkflowNotProgressionPolicyProcessor extends BaseProgressionPolicyProcessor {

    public function processPolicy() : bool
    {
        $result = true;

        echo __FILE__ . ':' . __LINE__ . ' - NOT policy unimplemented' . PHP_EOL;

        return true;
    }

}

