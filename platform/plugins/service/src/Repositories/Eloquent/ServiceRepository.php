<?php

namespace Platform\Service\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Service\Repositories\Interfaces\ServiceInterface;
use Platform\Base\Enums\BaseStatusEnum;

class ServiceRepository extends RepositoriesAbstract implements ServiceInterface
{
    public function getService(){
        $data = $this->model
            ->where('services.status', BaseStatusEnum::PUBLISHED);

        return $this->applyBeforeExecuteQuery($data)->get();
    }
    public function getFeatured(int $limit = 3){
        $data = $this->model
        ->where([
            'services.status'      => BaseStatusEnum::PUBLISHED,
            'services.is_featured' => 1,
        ])
        ->limit($limit)
        ->orderBy('services.created_at', 'desc');

    return $this->applyBeforeExecuteQuery($data)->get();
    }
    public function getLatest(){
        $data = $this->model
        ->where([
            'services.status'      => BaseStatusEnum::PUBLISHED,
            'services.is_featured' => 1,
        ])
        ->orderBy('services.created_at', 'ASC');

        return $this->applyBeforeExecuteQuery($data)->take(4)->get();
    }
    
}
