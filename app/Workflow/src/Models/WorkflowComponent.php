<?php

namespace App\Workflow\Models;

use Kodeine\Metable\Metable;

use Illuminate\Database\Eloquent\Model;

class WorkflowComponent extends Model
{
    use Metable;
    protected $guarded = [];

    public function currentComponent()
    {
        return $this->morphTo();
    }

    public function componentInstances()
    {
        return $this->hasMany(WorkflowComponentInstance::class);
    }

    public function nextWorkflowComponents()
    {
        return $this->belongsToMany(WorkflowComponent::class, 'workflow_component_chains', 'current_workflow_component_id', 'next_workflow_component_id');
    }

    public function previousWorkflowComponents()
    {
        return $this->belongsToMany(WorkflowComponent::class, 'workflow_component_chains', 'next_workflow_component_id', 'current_workflow_component_id');
    }
}
