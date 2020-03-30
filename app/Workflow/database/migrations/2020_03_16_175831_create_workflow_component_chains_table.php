<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkflowComponentChainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workflow_component_chains', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('current_workflow_component_id')->unsigned()->index();
            $table->bigInteger('next_workflow_component_id')->unsigned()->index();
            $table->foreign('current_workflow_component_id')->references('id')->on('workflow_components')->onDelete('cascade');
            $table->foreign('next_workflow_component_id')->references('id')->on('workflow_components')->onDelete('cascade');
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
        Schema::dropIfExists('workflow_component_chains');
    }
}
