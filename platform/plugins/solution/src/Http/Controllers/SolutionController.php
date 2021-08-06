<?php

namespace Platform\Solution\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Solution\Http\Requests\SolutionRequest;
use Platform\Solution\Repositories\Interfaces\SolutionInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\Solution\Tables\SolutionTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Solution\Forms\SolutionForm;
use Platform\Base\Forms\FormBuilder;

class SolutionController extends BaseController
{
    /**
     * @var SolutionInterface
     */
    protected $solutionRepository;

    /**
     * @param SolutionInterface $solutionRepository
     */
    public function __construct(SolutionInterface $solutionRepository)
    {
        $this->solutionRepository = $solutionRepository;
    }

    /**
     * @param SolutionTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(SolutionTable $table)
    {
        page_title()->setTitle(trans('plugins/solution::solution.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/solution::solution.create'));

        return $formBuilder->create(SolutionForm::class)->renderForm();
    }

    /**
     * @param SolutionRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(SolutionRequest $request, BaseHttpResponse $response)
    {
        $solution = $this->solutionRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(SOLUTION_MODULE_SCREEN_NAME, $request, $solution));

        return $response
            ->setPreviousUrl(route('solution.index'))
            ->setNextUrl(route('solution.edit', $solution->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $solution = $this->solutionRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $solution));

        page_title()->setTitle(trans('plugins/solution::solution.edit') . ' "' . $solution->name . '"');

        return $formBuilder->create(SolutionForm::class, ['model' => $solution])->renderForm();
    }

    /**
     * @param int $id
     * @param SolutionRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, SolutionRequest $request, BaseHttpResponse $response)
    {
        $solution = $this->solutionRepository->findOrFail($id);

        $solution->fill($request->input());

        $this->solutionRepository->createOrUpdate($solution);

        event(new UpdatedContentEvent(SOLUTION_MODULE_SCREEN_NAME, $request, $solution));

        return $response
            ->setPreviousUrl(route('solution.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $solution = $this->solutionRepository->findOrFail($id);

            $this->solutionRepository->delete($solution);

            event(new DeletedContentEvent(SOLUTION_MODULE_SCREEN_NAME, $request, $solution));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $solution = $this->solutionRepository->findOrFail($id);
            $this->solutionRepository->delete($solution);
            event(new DeletedContentEvent(SOLUTION_MODULE_SCREEN_NAME, $request, $solution));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
