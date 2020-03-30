<?php

namespace Tatham\Workflow\Http\Controllers\Api\V1;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class BaseApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $modelClass; // used for non-standard controllers
    protected $model;
    protected $resourceClass; // used for non-standard controllers
    protected $resource;
    protected $schema = [
        'store' => [''],
        'show' => [''],
        'update' => [''],
        'destroy' => [''],
    ];
    protected $matchAttributes = ['id'];
    protected $appendAttributes = ['created_at', 'updated_at'];

    public function __construct()
    {
        $class = get_class($this); // e.g. Tatham\Workflow\Http\Controllers\Api\V1\WorkflowTaskController
        $classComponents = explode("\\", $class); // an array of the above, delimited by backslashes
        $className = end($classComponents); // get last word of class
        $type = substr($className, 0, strlen($className) - strlen("ApiController")); // remove the word "Controller"; remainder is "WorkflowTask" etc

        $modelClass = $this->modelClass ?? "Tatham\\Workflow\\Models\\" . $type;
        $resourceClass = $this->resourceClass ?? "Tatham\\Workflow\\Http\\Resources\\" . $type . "Resource";
        // it is possible that not all API controllers have a corresponding model/resource class
        if (class_exists($modelClass))
        {
            $this->model = new $modelClass();
            $this->resource = $resourceClass;
        }
    }

    /**
     * Display a listing of all the resources, preferably paginated.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->resource::collection($this->model->paginate(15));
    }

    /**
     * Show the form for creating a new resource. This is intended for webpages, but can show a JSON schematic instead
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->schema['store'];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();

        $matchingAttributes = [];
        foreach ($this->matchAttributes as $matchAttribute)
        {
            if (isset($attributes[$matchAttribute]) || isset($this->schema['store'][$matchAttribute]['default']))
            {
                $matchingAttributes = $attributes[$matchAttribute] ?? $this->schema['store'][$matchAttribute]['default'];
            }
        }

        $appendingAttributes = [];
        foreach ($this->appendAttributes as $appendAttribute)
        {
            if (isset($attributes[$appendAttribute]) || isset($this->schema['store'][$appendAttribute]['default']))
            {
                $appendingAttributes = $attributes[$appendAttribute] ?? $this->schema['store'][$appendAttribute]['default'];
            }
        }

        $model = $this->model->firstOrCreate($matchingAttributes, $appendingAttributes);

        if (count($attributes['meta']) > 0)
        {
            foreach ($attributes as $key => $value)
            {
                // set meta-keys
                $model->$key = $value;
            }
            $model->save();
        }

        return (new $this->resource($model));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return (new $this->resource($this->model->find($id)));
    }

    /**
     * Show the form for editing the specified resource. This is intended for webpages, but can show a JSON schematic instead
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->schema['update'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->all();

        $model = $this->model->find($id);

        foreach ($attributes as $key => $value)
        {
            $model->$key = $value;
        }

        $model->save();

        return (new $this->resource($model));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->model->delete($id);

        return ["deleted" => $deleted];
    }
}
