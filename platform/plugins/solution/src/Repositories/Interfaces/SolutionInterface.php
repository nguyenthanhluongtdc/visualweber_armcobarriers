<?php

namespace Platform\Solution\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface SolutionInterface extends RepositoryInterface
{
    public function getSolution();
    public function getFeatured(int $limit = 3);
    public function getLatest();
}
