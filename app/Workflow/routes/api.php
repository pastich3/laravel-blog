<?php

Route::group(['namespace' => 'Tatham\\Workflow\\Http\\Controllers\\Api\\V1', 'prefix' => 'api/workflow/v1/', 'as' => 'workflowApi.'], function() {

    Route::group(['middleware' => ['auth:api']], function () {
        Route::group(['prefix' => '/workflows/'], function() {
            Route::post('{workflow_id}/setComponents', 'WorkflowApiController@setComponents')->name('setWorkflowComponents');
        });
    });
});
