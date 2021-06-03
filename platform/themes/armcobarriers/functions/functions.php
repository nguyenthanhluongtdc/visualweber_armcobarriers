<?php

register_page_template([
    'default' => 'Default',
    'service' => 'Service',
    'applications' => 'Applications',
    'gallery' => 'Gallery',
    'contact-us' => 'Contact-us',
    'products' => 'Products',
    'about' => 'About',
    'media-details' =>'Media-details',
    'news-all' => 'News-all',
    'news-media' => 'News-media',
    'news-detail' => 'News-detail',
    'product-details' => 'Product-details',
    'service-details' => 'Service-details',
    'page/index'

]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for armcobarriers theme',
]);

RvMedia::setUploadPathAndURLToPublic();
