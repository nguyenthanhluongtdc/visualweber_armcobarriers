<?php

return [
    'locations' => [
        'header-menu' => 'Header Navigation',
        'main-menu'   => 'Main Navigation',
        'footer-menu' => 'Footer Navigation',
        'tabs-menu' => 'News-media tabs',
        'categories-product-menu' => 'Menu product category',
    ],
    'cache'     => [
        'enabled' => env('CACHE_FRONTEND_MENU', false),
    ],
];
