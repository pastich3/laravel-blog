<?php

namespace App\Workflow\Providers;

use App\Workflow\Models\WorkflowMorphMap;

use Illuminate\Support\ServiceProvider;

class WorkflowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom([
            app_path() . '/Workflow/src/Database/Migrations'
        ]);
        WorkflowMorphMap::registerMorphMap();
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
    }
}
