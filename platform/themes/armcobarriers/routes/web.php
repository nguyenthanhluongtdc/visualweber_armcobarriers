<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.

use Illuminate\Support\Facades\Route;
use Platform\Service\Models\Service;

Route::group(['namespace' => 'Theme\Armcobarriers\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get('/news-all', 'ArmcobarriersController@getPosts')
            ->name('public.custom.post');

        Route::get(\SlugHelper::getPrefix(Service::class) . '/{slug}', [
            'as' => 'service-detail',
            'uses' => 'ArmcobarriersController@getServices',
        ]);
    });
});

// Theme::routes();

Route::group(['namespace' => 'Theme\Armcobarriers\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'ArmcobarriersController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'ArmcobarriersController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'ArmcobarriersController@getView')
            ->name('public.single');
            
    });
});
