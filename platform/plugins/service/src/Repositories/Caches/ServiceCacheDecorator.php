<?php

namespace Platform\Service\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\Service\Repositories\Interfaces\ServiceInterface;

class ServiceCacheDecorator extends CacheAbstractDecorator implements ServiceInterface
{
    public function getService()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
    public function  getFeatured(int $limit = 3)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
    public function   getLatest()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
   
   
}
