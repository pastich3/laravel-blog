<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkflowComponentInstancesMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workflow_component_instances_meta', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('workflow_component_instance_id')->unsigned()->index('workflow_component_instance_meta_index');
            $table->foreign('workflow_component_instance_id', 'wcim_fk_wc')->references('id')->on('workflow_component_instances')->onDelete('cascade');

            $table->string('type')->default('null');

            $table->string('key')->index();
            $table->text('value')->nullable();

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
        Schema::dropIfExists('workflow_component_instances_meta');
    }
}
