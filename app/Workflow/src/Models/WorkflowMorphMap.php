<?php

namespace App\Workflow\Models;

use Illuminate\Database\Eloquent\Relations\Relation;
// not truly a model but closely related
class WorkflowMorphMap
{
    const WORKFLOW = 1;
    const TASK = 2;
    const PROGRESSION_POLICY = 3;


    public static function registerMorphMap()
    {
        Relation::morphMap([
            self::WORKFLOW => Workflow::class,
            self::TASK => WorkflowTask::class,
            self::PROGRESSION_POLICY => WorkflowProgressionPolicy::class,
        ]);
    }
}
