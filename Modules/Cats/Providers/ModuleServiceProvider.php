<?php

namespace TypiCMS\Modules\Cats\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TypiCMS\Modules\Core\Facades\TypiCMS;
use TypiCMS\Modules\Core\Observers\SlugObserver;
use TypiCMS\Modules\Cats\Composers\SidebarViewComposer;
use TypiCMS\Modules\Cats\Facades\Cats;
use TypiCMS\Modules\Cats\Models\Cat;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/cats.php', 'typicms.modules.cats');

        $this->loadRoutesFrom(__DIR__ . '/../routes/cats.php');

        $this->loadViewsFrom(resource_path('views'), 'cats');

        AliasLoader::getInstance()->alias('Cats', Cats::class);

        // Observers
        Cat::observe(new SlugObserver());

        View::composer('core::admin._sidebar', SidebarViewComposer::class);

        /*
         * Add the page in the view.
         */
        View::composer('cats::public.*', function ($view) {
            $view->page = TypiCMS::getPageLinkedToModule('cats');
        });
    }

    public function register(): void
    {
        $this->app->bind('Cats', Cat::class);
    }
}
