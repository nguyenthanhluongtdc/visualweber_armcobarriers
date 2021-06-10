<?php

namespace Platform\Service\Providers;

use Platform\Service\Models\Service;
use Illuminate\Support\ServiceProvider;
use Platform\Service\Repositories\Caches\ServiceCacheDecorator;
use Platform\Service\Repositories\Eloquent\ServiceRepository;
use Platform\Service\Repositories\Interfaces\ServiceInterface;
use Platform\Base\Supports\Helper;
use Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ServiceServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ServiceInterface::class, function () {
            return new ServiceCacheDecorator(new ServiceRepository(new Service));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/service')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Service::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-service',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/service::service.name',
                'icon'        => 'fa fa-list',
                'url'         => route('service.index'),
                'permissions' => ['service.index'],
            ]);
        });
        $this->app->booted(function () {
            \SlugHelper::registerModule(Service::class);
            \SlugHelper::setPrefix(Service::class, 'services');
            
            if (defined('SERVICE_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(Service::class)
                    ->registerRule('basic', __('Service'), Service::class, function () {
                        return $this->app->make(ServiceInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            Service::class => __('Service'),
                        ];
                    })
                    ;
             }
        });
    }
}
