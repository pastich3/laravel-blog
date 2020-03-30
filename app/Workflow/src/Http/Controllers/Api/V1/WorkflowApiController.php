<?php

namespace Tatham\Workflow\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use Tatham\Workflow\Models\Workflow;

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

    public function setComponents(Request $request, $workflow_id)
    {
        if (is_int($workflow_id))
        {
            $workflow = Workflow::where('client_id', 1) // TODO placeholder
                ->find($workflow_id);

            $hasChanges = false;
            if ($workflow->name !== $request->get('name'))
            {
                $workflow->name = $request->get('name');
                $hasChanges = true;
            }
            if ($workflow->status_id != $request->get('status_id'))
            {
                $workflow->status_id = $request->get('status_id');
                $hasChanges = true;
            }
            if ($hasChanges)
            {
                $workflow->save();
            }
        } else {
            $workflow = Workflow::firstOrCreate([
                'name' => $request->get('name')||'',
                'client_id' => 1, // TODO placeholder
                'status_id' => Workflow::STATUS_NEW
            ]);
        }

        // \Log::info($request->all());
    }

}
