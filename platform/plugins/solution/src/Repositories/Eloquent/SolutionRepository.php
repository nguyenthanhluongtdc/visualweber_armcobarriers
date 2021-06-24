<?php

namespace Platform\Solution\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Solution\Repositories\Interfaces\SolutionInterface;
use Platform\Base\Enums\BaseStatusEnum;

class SolutionRepository extends RepositoriesAbstract implements SolutionInterface
{
    public function getSolution(){
        $data = $this->model->where('app_solutions.status', BaseStatusEnum::PUBLISHED)->get();
        return $data;
        $data = $this->model
            ->where('app_solutions.status', BaseStatusEnum::PUBLISHED);

        return $this->applyBeforeExecuteQuery($data)->get();
    }
    public function getFeatured(int $limit = 3){
        $data = $this->model
        ->where([
            'app_solutions.status'      => BaseStatusEnum::PUBLISHED,
            'app_solutions.is_featured' => 1,
        ])
        ->limit($limit)
        ->orderBy('app_solutions.created_at', 'desc');

    return $this->applyBeforeExecuteQuery($data)->get();
    }
    public function getLatest(){
        $data = $this->model
        ->where([
            'app_solutions.status'      => BaseStatusEnum::PUBLISHED,
            'app_solutions.is_featured' => 1,
        ])
        ->orderBy('app_solutions.created_at', 'ASC');

        return $this->applyBeforeExecuteQuery($data)->take(4)->get();
        }
}
