<?php

namespace App\Workflow\Models;

use Illuminate\Database\Eloquent\Model;

class WorkflowTask extends Model
{
    protected $guarded = [];

    public function workflowComponents()
    {
        return $this->morphMany(workflowComponents::class, 'current_component');
    }
}
