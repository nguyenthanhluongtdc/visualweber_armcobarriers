<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.

use Illuminate\Support\Facades\Route;
use Platform\Service\Models\Service;
use Platform\Service\Models\Solution;
use Platform\Page\Models\Page;

Route::group(['namespace' => 'Theme\Armcobarriers\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        
        Route::get(\SlugHelper::getPrefix(Service::class) . '/{slug}', [
            'as' => 'service-detail',
            'uses' => 'ArmcobarriersController@getServices',
        ]);
        
        Route::get('/news-media/ajax','ArmcobarriersController@getPostAjax')->name('public.post.ajax');
    });
});


// Theme::routes();

Route::group(['namespace' => 'Theme\Armcobarriers\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'ArmcobarriersController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'ArmcobarriersController@getSiteMap')
            ->name('public.sitemap');
        Route::get('{slug?}' . config('core.base.general.public_single_ending_url')

        , 'ArmcobarriersController@getView')
            ->name('public.single');
            Route::get(\SlugHelper::getPrefix(Solution::class) . '/{slug}', [
                'as' => 'solutions-details',
                'uses' => 'ArmcobarriersController@getSolutions',
            ]);
            
    });
});
