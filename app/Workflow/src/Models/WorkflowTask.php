<?php

namespace App\Workflow\Models;

use Illuminate\Database\Eloquent\Model;

class WorkflowTask extends Model
{
    protected $guarded = [];

    public function currentWorkflowComponents()
    {
        return $this->morphMany(WorkflowComponents::class, 'currentComponent');
    }

    public function nextWorkflowComponents()
    {
        return $this->morphMany(WorkflowComponents::class, 'currentComponent');
    }
}
