<?php

namespace App\Workflow\Models;

use Kodeine\Metable\Metable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class WorkflowComponentInstances extends Model
{
    use Metable, SoftDeletes;
    protected $guarded = [];
}
