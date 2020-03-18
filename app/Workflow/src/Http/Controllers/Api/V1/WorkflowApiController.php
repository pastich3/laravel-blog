<?php

namespace Tatham\Workflow\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

class WorkflowApiController extends BaseController
{
    protected $schema = [
        'store' => [''],
        'show' => [''],
        'update' => [''],
        'destroy' => [''],
    ];

    protected $matchAttributes = ['name', 'client_id'];
    protected $appendAttributes = ['status_id'];

}
