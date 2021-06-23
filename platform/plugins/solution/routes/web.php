<?php

Route::group(['namespace' => 'Platform\Solution\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'solutions', 'as' => 'solution.'], function () {
            Route::resource('', 'SolutionController')->parameters(['' => 'solution']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'SolutionController@deletes',
                'permission' => 'solution.destroy',
            ]);
        });
    });

});
