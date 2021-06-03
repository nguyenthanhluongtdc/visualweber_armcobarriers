<?php

register_page_template([
    'default' => 'Default',
    'about-us' => 'About Us',
    'service' => 'Service',
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for armcobarriers theme',
]);

RvMedia::setUploadPathAndURLToPublic();
