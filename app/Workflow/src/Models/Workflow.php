<?php

namespace Tatham\Workflow\Models;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    protected $guarded = [];

    public function components()
    {
        return $this->hasMany(WorkflowComponent::class);
    }
}
