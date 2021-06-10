<?php

use Platform\Service\Repositories\Interfaces\ServiceInterface;

if(!function_exists('get_services')) {
    function get_services() {
        return app(ServiceInterface::class)->allBy([]);
    }
}