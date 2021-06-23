<?php

namespace Platform\Solution\Tables;

use Auth;
use BaseHelper;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Solution\Repositories\Interfaces\SolutionInterface;
use Platform\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Platform\Solution\Models\Solution;
use Html;

class SolutionTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * SolutionTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param SolutionInterface $solutionRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, SolutionInterface $solutionRepository)
    {
        $this->repository = $solutionRepository;
        $this->setOption('id', 'plugins-solution-table');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['solution.edit', 'solution.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
                if (!Auth::user()->hasPermission('solution.edit')) {
                    return $item->name;
                }
                return Html::link(route('solution.edit', $item->id), $item->name);
            })
            // ->editColumn('image', function ($item) {
            //     return Html::image(RvMedia::getImageUrl($item->image, 'thumb', false, RvMedia::getDefaultImage()), $item->name, ['width' => 70]);
            // })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })

            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, $this->repository->getModel())
            ->addColumn('operations', function ($item) {
                return $this->getOperations('solution.edit', 'solution.destroy', $item);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $model = $this->repository->getModel();
        $select = [
            'app_solutions.id',
            'app_solutions.name',
            'app_solutions.image',
            'app_solutions.created_at',
            'app_solutions.status',
        ];

        $query = $model->select($select);

        return $this->applyScopes(apply_filters(BASE_FILTER_TABLE_QUERY, $query, $model, $select));
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id' => [
                'name'  => 'app_solutions.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'name'  => 'app_solutions.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            // 'image'      => [
            //     'name'  => 'app_solutions.image',
            //     'title' => trans('core/base::tables.image'),
            //     'width' => '70px',
            // ],
            'created_at' => [
                'name'  => 'app_solutions.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'app_solutions.status',
                'title' => trans('core/base::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function buttons()
    {
        $buttons = $this->addCreateButton(route('solution.create'), 'solution.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Solution::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('solution.deletes'), 'solution.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'app_solutions.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'app_solutions.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'app_solutions.created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
        return $this->getBulkChanges();
    }
}
