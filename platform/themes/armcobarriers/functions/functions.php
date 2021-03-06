<?php

register_page_template([
    'default' => 'Default',
    'service' => 'Service',
    'applications' => 'Applications',
    'gallery' => 'Gallery',
    'contact-us' => 'Contact-us',
    'products' => 'Products',
    'products-detail' => 'Products-detail',
    'about-us' => 'About-us',
    'request-quotation' => 'Request-quotation',
    'media-details' =>'Media-details',
    'news-media' => 'News-media',
    'news-detail' => 'News-detail',
    'services-detail' => 'Services-detail',
    'cart' => 'Cart',
    'privacy-policy' => 'Privacy-policy',
    'solutions' => 'Solutions',
    'solutions-details' => 'Solutions-details'
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for armcobarriers theme',
]);
register_sidebar([
    'id'          => 'footer_sidebar',
    'name'        => __('Footer Sidebar'),
    'description' => __('This the description for widget area'),
]);
register_sidebar([
    'id'          => 'fanpage',
    'name'        => __('Fanpage'),
    'description' => __('This the description for widget area'),
]);

Menu::addMenuLocation('product-categories', 'Product categories menu');

RvMedia::setUploadPathAndURLToPublic();

RvMedia::addSize('page_product', 280, 260)
        ->addSize('page_product_detail_large', 660, 590)
        ->addSize('page_product_detail_secondary', 90, 80);


