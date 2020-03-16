<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class WorkflowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom([
            app_path() . '/Workflow/Database/Migrations'
        ]);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
    }
}
