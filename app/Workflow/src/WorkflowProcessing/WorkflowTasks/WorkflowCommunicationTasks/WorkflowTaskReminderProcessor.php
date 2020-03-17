<?php

namespace Tatham\Workflow\Processing\WorkflowTasks;

use Tatham\Workflow\Processing\WorkflowTasks\BaseTaskProcessor;

class WorkflowTaskReminderProcessor extends BaseTaskProcessor {

    public function processTask() : bool
    {
        $result = null;
        echo "Reminder for task " . $this->workflowTask->id . PHP_EOL;

        $result = true;

        return $result;
    }

}

