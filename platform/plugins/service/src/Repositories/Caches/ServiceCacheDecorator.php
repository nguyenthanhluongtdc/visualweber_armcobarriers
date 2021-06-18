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
}
