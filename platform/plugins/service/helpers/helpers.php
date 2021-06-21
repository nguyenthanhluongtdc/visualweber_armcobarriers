<?php

use Platform\Service\Repositories\Interfaces\ServiceInterface;
use Platform\Base\Enums\BaseStatusEnum;

if(!function_exists('get_services')) {
    function get_services() {
    //    $data = $this->model->where('services.status',BaseStatusEnum::PUBLISHED);
        return app(ServiceInterface::class)->getService();
    }
}
if (!function_exists('get_featured_services')) {
    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_featured_services($limit)
    {
        return app(ServiceInterface::class)->getFeatured($limit);
    }
}
if (!function_exists('get_services_latest')) {
    function get_services_latest(){
        return app(ServiceInterface::class)->getLatest();
    }
}
