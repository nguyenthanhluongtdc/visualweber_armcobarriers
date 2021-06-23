<?php

use Platform\Solution\Repositories\Interfaces\SolutionInterface;
use Platform\Base\Enums\BaseStatusEnum;

if(!function_exists('get_solutions')) {
    function get_solutions() {
    //    $data = $this->model->where('services.status',BaseStatusEnum::PUBLISHED);
        return app(SolutionInterface::class)->getSolution();
    }
}
if (!function_exists('get_featured_solutions')) {
    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_featured_solutions($limit)
    {
        return app(SolutionInterface::class)->getFeatured($limit);
    }
}
if (!function_exists('get_solutions_latest')) {
    function get_solutions_latest(){
        return app(SolutionInterface::class)->getLatest();
    }
}
