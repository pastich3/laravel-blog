<?php

Route::group(['namespace' => 'Tatham\\Workflow\\Http\\Controllers\\Api\\V1', 'prefix' => 'api/workflow/v1/', 'as' => 'workflowApi.'], function() {

    // Route::group(['middleware' => ['auth:api']], function () {
        Route::group(['prefix' => '/workflows/'], function() {
            Route::post('setComponents/{workflow_id?}', 'WorkflowApiController@setComponents');
        });
        Route::group(['prefix' => '/progressionPolicies/'], function() {
            Route::get('getAll', 'WorkflowProgressionPolicyApiController@getAll');
        });
        Route::group(['prefix' => '/tasks/'], function() {
            Route::get('getAll', 'WorkflowTaskApiController@getAll');
        });
    });
// });
