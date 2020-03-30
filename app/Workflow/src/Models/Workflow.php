<?php

namespace Tatham\Workflow\Models;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    const STATUS_NEW = 1;
    protected $guarded = [];

    public function components()
    {
        return $this->hasMany(WorkflowComponent::class);
    }
}
