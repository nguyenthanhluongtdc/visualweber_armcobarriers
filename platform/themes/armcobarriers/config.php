<?php

use Platform\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.
            // $theme->asset()->add('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
            // $theme->asset()->usePath()->add('style', 'css/common.css');
            // $theme->asset()->container('footer')->usePath()->add('script', 'js/common.js');
            $theme->asset()->add('carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
            $theme->asset()->add('carousel_thumb', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
            $theme->asset()->add('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
            $theme->asset()->usePath()->add('style', 'css/common.css');
            $theme->asset()->container('footer')->usePath()->add('script', 'js/common.js');
           
            $theme->asset()->container('footer')->add('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
            $theme->asset()->container('footer')->add('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js');
            $theme->asset()->add('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
            $theme->asset()->add('font-awesome-pro', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
            $theme->asset()->add('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
            $theme->asset()->container('footer')->add('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
            $theme->asset()->container('footer')->add('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
            $theme->asset()->container('footer')->add('carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'); 
            $theme->asset()->container('footer')->add('carousel_thumb', 'https://cdn.jsdelivr.net/npm/owl.carousel2.thumbs@0.1.8/dist/owl.carousel2.thumbs.min.js');      
            // $theme->asset()->usePath()->add('style', 'css/common.css',[],[],time());
            if (function_exists('shortcode')) {
                $theme->composer(['index', 'page', 'post'], function (\Platform\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
