<?php

use Platform\Service\Repositories\Interfaces\ServiceInterface;
use Platform\Base\Enums\BaseStatusEnum;

if(!function_exists('get_services')) {
    function get_services() {
    //    $data = $this->model->where('services.status',BaseStatusEnum::PUBLISHED);
        return app(ServiceInterface::class)->getService();
    }
}