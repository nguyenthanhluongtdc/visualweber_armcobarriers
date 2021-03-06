<?php

namespace Platform\Page\Repositories\Eloquent;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Page\Models\Page;
use Platform\Page\Repositories\Interfaces\PageInterface;
use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use SlugHelper;

class PageRepository extends RepositoriesAbstract implements PageInterface
{

    /**
     * {@inheritDoc}
     */
    public function getDataSiteMap()
    {
        $data = $this->model
            ->where('pages.status', BaseStatusEnum::PUBLISHED)
            ->select('pages.*')
            ->orderBy('pages.created_at', 'desc');

        return $this->applyBeforeExecuteQuery($data)->get();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturedPages($limit)
    {
        $data = $this->model
            ->where(['pages.status' => BaseStatusEnum::PUBLISHED, 'pages.is_featured' => 1])
            ->orderBy('pages.created_at')
            ->select('pages.*')
            ->limit($limit)
            ->orderBy('pages.created_at', 'desc');

        return $this->applyBeforeExecuteQuery($data)->get();
    }

    /**
     * {@inheritDoc}
     */
    public function whereIn($array, $select = [])
    {
        $pages = $this->model
            ->whereIn('pages.id', $array)
            ->where('pages.status', BaseStatusEnum::PUBLISHED);

        if (empty($select)) {
            $select = 'pages.*';
        }
        $data = $pages
            ->select($select)
            ->orderBy('pages.created_at');

        return $this->applyBeforeExecuteQuery($data)->get();
    }

    /**
     * {@inheritDoc}
     */
    public function getSearch($query, $limit = 10)
    {
        $pages = $this->model->where('pages.status', BaseStatusEnum::PUBLISHED);
        foreach (explode(' ', $query) as $term) {
            $pages = $pages->where('pages.name', 'LIKE', '%' . $term . '%');
        }

        $data = $pages
            ->select('pages.*')
            ->orderBy('pages.created_at', 'desc')
            ->limit($limit);

        return $this->applyBeforeExecuteQuery($data)->get();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllPages($active = true)
    {
        $data = $this->model->select('pages.*');
        if ($active) {
            $data = $data->where('pages.status', BaseStatusEnum::PUBLISHED);
        }

        return $this->applyBeforeExecuteQuery($data)->get();
    }

    public function getByTemplate($template = "")
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => $template], ['*']);

        if (\blank($page)) {
            return '';
        }

        $slug = Slughelper::getSlug(\null, Slughelper::getPrefix(Page::class), Page::class, $page->id);

        return (SlugHelper::getPrefix(Page::class) . '/' . $slug->key) ?? '';
    }
}
