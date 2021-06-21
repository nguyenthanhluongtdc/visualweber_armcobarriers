<?php

namespace Platform\Service\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface ServiceInterface extends RepositoryInterface
{
    public function getService();
    public function getFeatured(int $limit = 3);
    public function getLatest();
    
}
