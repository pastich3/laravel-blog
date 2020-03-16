<?php

namespace App\Workflow\Models;

use Illuminate\Database\Eloquent\Model;

class WorkflowTask extends Model
{
    protected $guarded = [];

    const TWO_WEEK_REMINDER = 1;

    public function currentWorkflowComponents()
    {
        return $this->morphMany(WorkflowComponents::class, 'currentComponent');
    }

    public function nextWorkflowComponents()
    {
        return $this->morphMany(WorkflowComponents::class, 'currentComponent');
    }
}
