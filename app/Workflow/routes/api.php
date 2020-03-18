<?php

Route::group(['namespace' => 'Api\\V1', 'prefix' => '/v1/', 'as' => 'api.'], function() {

    Route::group(['middleware' => ['auth:api']], function () {
    });
});
