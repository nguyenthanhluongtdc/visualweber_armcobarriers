<?php

namespace Platform\Solution\Providers;

use Platform\Solution\Models\Solution;
use Illuminate\Support\ServiceProvider;
use Platform\Solution\Repositories\Caches\SolutionCacheDecorator;
use Platform\Solution\Repositories\Eloquent\SolutionRepository;
use Platform\Solution\Repositories\Interfaces\SolutionInterface;
use Platform\Base\Supports\Helper;
use Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class SolutionServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(SolutionInterface::class, function () {
            return new SolutionCacheDecorator(new SolutionRepository(new Solution));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/solution')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Solution::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-solution',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/solution::solution.name',
                'icon'        => 'fa fa-list',
                'url'         => route('solution.index'),
                'permissions' => ['solution.index'],
            ]);
        });
       

        $this->app->booted(function () {
            \SlugHelper::registerModule(Solution::class);
            \SlugHelper::setPrefix(Solution::class, 'solutions');
            \SeoHelper::registerModule(Solution::class);
            if (defined('SOLUTION_MODULE_SCREEN_NAME')) {
               
                \CustomField::registerModule(Solution::class)
                    ->registerRule('basic', __('Solution'), Solution::class, function () {
                        return $this->app->make(SolutionInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            Solution::class => __('Solution'),
                        ];
                    })
                    ;
             }
        });
    }
}
