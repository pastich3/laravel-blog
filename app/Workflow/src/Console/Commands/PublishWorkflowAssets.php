<?php
namespace Tatham\Workflow\Console\Commands;

use Illuminate\Console\Command;


class PublishWorkflowAssetsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tathamWorkflow:publishAssets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Re-publish the Tatham Workflow assets';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--provider' => 'Tatham\Workflow\Providers\WorkflowServiceProvider',
            '--tag' => 'views',
            '--force' => true,
        ]);
    }
}
