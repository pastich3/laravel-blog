<?php

namespace Tatham\Workflow\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

class WorkflowProgressionPolicyApiController extends BaseApiController
{
    protected $schema = [
        'store' => [''],
        'show' => [''],
        'update' => [''],
        'destroy' => [''],
    ];

    protected $matchAttributes = [''];
    protected $appendAttributes = [''];

    public function getAll()
    {
        return $this->resource::collection($this->model->all());
    }

}
