<?php

namespace Tatham\Workflow\Processing;

use Tatham\Workflow\Models\WorkflowComponentInstance;

abstract class BaseProcessRouter {

    protected $componentInstance;

    public final function __construct(WorkflowComponentInstance $componentInstance)
    {
        $this->componentInstance = $componentInstance;
        $this->postConstruct(); // optional for subclasses
    }

    protected function postConstruct() {} // optional, overrideable

    abstract public function process();
}

