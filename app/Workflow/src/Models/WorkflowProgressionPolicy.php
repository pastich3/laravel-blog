<?php

namespace Tatham\Workflow\Models;

use Illuminate\Database\Eloquent\Model;

class WorkflowProgressionPolicy extends Model
{
    protected $guarded = [];
    const OR = 1;
    const AND = 2;
    const NOT = 3;
    const XOR = 4;
}
