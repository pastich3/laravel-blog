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

    public function nextComponent()
    {
        return $this->morphTo();
    }
}
