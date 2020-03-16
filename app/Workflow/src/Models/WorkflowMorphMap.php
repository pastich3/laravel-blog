<?php

namespace App\Workflow\Models;

use Illuminate\Database\Eloquent\Relations\Relation;
// not truly a model but closely related
class WorkflowMorphMap
{
    const WORKFLOW = 1;
    const TASK = 2;
    const PROGRESSION_POLICY = 3;

    const CLASS_TO_INT_MAP = [
        Workflow::class => self::WORKFLOW,
        WorkflowTask::class => self::TASK,
        WorkflowProgressionPolicy::class => self::PROGRESSION_POLICY,
    ];

    const INT_TO_CLASS_MAP = [
        self::WORKFLOW => Workflow::class,
        self::TASK => WorkflowTask::class,
        self::PROGRESSION_POLICY => WorkflowProgressionPolicy::class,
    ];

    public static function registerMorphMap()
    {
        Relation::morphMap(self::INT_TO_CLASS_MAP);
    }
}
