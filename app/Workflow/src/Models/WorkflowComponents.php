<?php

namespace App\Workflow\Models;

use Kodeine\Metable\Metable;

use Illuminate\Database\Eloquent\Model;

class WorkflowComponents extends Model
{
    use Metable;
    protected $guarded = [];

    public function currentComponent()
    {
        $name = null, $type = null, $id = null, $ownerKey = null
        return $this->morphTo();
    }

    public function nextComponent()
    {
        return $this->morphTo();
    }
}
