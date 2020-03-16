<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkflowComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workflow_components', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('current_component_type')->unsigned()->comment('Morphable but as an id rather than a string');
            $table->integer('current_component_id')->unsigned();
            $table->tinyInteger('next_component_type')->unsigned()->comment('Morphable but as an id rather than a string');
            $table->integer('next_component_id')->unsigned();

            $table->index(['current_component_id', 'current_component_type'], 'workflow_components_compound_index');
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
        Schema::dropIfExists('workflow_components');
    }
}
