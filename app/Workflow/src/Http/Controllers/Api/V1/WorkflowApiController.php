<?php

namespace Tatham\Workflow\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use Tatham\Workflow\Models\WorkflowComponent;
use Tatham\Workflow\Models\WorkflowMorphMap;

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
            $workflow = $this->model->where('client_id', 1) // TODO placeholder
                ->find($workflow_id);

            $workflow->name = $request->get('name');
            $workflow->status_id = $request->get('status_id');

            $workflow->save(); // only hits DB if there were actually changes
        } else {
            $workflow = $this->model->firstOrCreate([
                'name' => $request->get('name')||'',
                'client_id' => 1, // TODO placeholder
                'status_id' => $this->model::STATUS_NEW
            ]);
        }

        $this->purgeWorkflowComponents($workflow); // TODO heavy handed
        $branches = collect([]);
        foreach ($request->get('children') as $childBranch)
        {
            $branches[] = $this->recursivelyProcessBranch($childBranch, $workflow->id);
        }
        $workflow->setRelation('components', $branches);

        return (new $this->resource($workflow));
    }

    private function purgeWorkflowComponents($workflow)
    {
        WorkflowComponent::where('workflow_id', $workflow->id)->delete();
    }

    private function recursivelyProcessBranch($branch, $workflow_id)
    {
        $nextComponents = collect([]);
        $component = WorkflowComponent::create([
            'workflow_id' => $workflow_id,
            'current_component_type' => $this->getComponentType($branch['type']),
            'current_component_id' => $branch['id']
        ]);
        foreach ($branch['children'] as $child)
        {
            $nextComponent = $this->recursivelyProcessBranch($child, $workflow_id);
            $nextComponents[] = $nextComponent;

            $component->nextWorkflowComponents()->sync($nextComponents->pluck('id'));
            $component->setRelation('nextWorkflowComponents', $nextComponents);
        }
        return $component;
    }

    private function getComponentType($type)
    {
        switch ($type)
        {
            case 'task' : { return WorkflowMorphMap::TASK; }
            case 'progression-policy' : { return WorkflowMorphMap::PROGRESSION_POLICY; }
            case 'workflow' : { return WorkflowMorphMap::WORKFLOW; }
            default: { return 0; }
        }
    }

}
