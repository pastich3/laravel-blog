<?php

namespace Tatham\Workflow\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

class WorkflowApiController extends BaseApiController
{
    protected $schema = [
        'store' => [''],
        'show' => [''],
        'update' => [''],
        'destroy' => [''],
    ];

    protected $matchAttributes = ['name', 'client_id'];
    protected $appendAttributes = ['status_id'];

    public function setComponents(Request $request, int $workflow_id)
    {

    }

}
