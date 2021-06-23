<?php

namespace Platform\Solution\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\Solution\Repositories\Interfaces\SolutionInterface;

class SolutionCacheDecorator extends CacheAbstractDecorator implements SolutionInterface
{
    public function getSolution()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
    public function getFeatured(int $limit = 3)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
    public function getLatest()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
