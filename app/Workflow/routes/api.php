<?php

Route::group(['namespace' => 'Api\\V1', 'prefix' => 'workflow/v1/', 'as' => 'workflowApi.'], function() {

    Route::group(['middleware' => ['auth:api']], function () {
        Route::group(['prefix' => '/workflos/'], function() {
            Route::post('{workflow_id}/setComponents', 'WorkflowApiController@setComponents');
        });
    });
});
