<?php

namespace Tatham\Workflow\Models;

use Kodeine\Metable\Metable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class WorkflowComponentInstance extends Model
{
    use Metable, SoftDeletes;
    protected $guarded = [];

    public function workflowComponent()
    {
        return $this->belongsTo(WorkflowComponent::class);
    }

}
