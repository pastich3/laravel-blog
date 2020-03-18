<?php

namespace Tatham\Workflow\Providers;

use Tatham\Workflow\Models\WorkflowMorphMap;

use Illuminate\Support\ServiceProvider;

use Tatham\Workflow\Console\Commands\PublishWorkflowAssetsCommand;

class WorkflowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom([
            __DIR__ . '/../../database/migrations'
        ]);
        WorkflowMorphMap::registerMorphMap();
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/tatham-workflow')
        ], 'views');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishWorkflowAssetsCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(WorkflowEventServiceProvider::class);
    }
}
