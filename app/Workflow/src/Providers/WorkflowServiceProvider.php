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
            __DIR__ . '/../database/migrations'
        ]);
        WorkflowMorphMap::registerMorphMap();
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        /*$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');*/
        $this->publishes([
            __DIR__ . '/../resources/assets' =>
            resource_path('assets/tatham/workflow'
        )], 'vue-components');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(WorkflowEventServiceProvider::class);
    }
}
