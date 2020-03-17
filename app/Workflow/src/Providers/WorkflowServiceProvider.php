<?php

namespace Tatham\Workflow\Providers;

use Tatham\Workflow\Models\WorkflowMorphMap;

use Illuminate\Support\ServiceProvider;

class WorkflowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom([
            __DIR__ . '/../Database/Migrations'
        ]);
        WorkflowMorphMap::registerMorphMap();
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(WorkflowEventServiceProvider::class);
    }
}
