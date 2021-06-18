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
}
