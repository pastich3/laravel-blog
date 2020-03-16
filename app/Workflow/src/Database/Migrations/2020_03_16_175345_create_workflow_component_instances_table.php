<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkflowComponentInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workflow_component_instances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('workflow_component_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->datetime('completed_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workflow_component_instances');
    }
}
