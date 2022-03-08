<?php
# CmsServiceProvider.php

namespace ManFai\Cms;

use Illuminate\Support\ServiceProvider;
use ManFai\Cms\Http\View\Components\Layout;
use ManFai\Cms\Http\View\Components\Header;
use ManFai\Cms\Http\View\Components\Navigation;
use ManFai\Cms\Http\View\Components\Footer;

class CmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // dd(123);
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'cms');
        $this->publishes([
            __DIR__.'/../config/cms.php' => config_path('cms.php')
        ], 'config');
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');
        $this->publishes([
            __DIR__.'/../views/' => base_path('resources/views/vendor/cms'),
            __DIR__.'/../js/' => base_path('resources/assets/js/vendor/cms')
        ], 'assets');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cms');

        $this->loadViewComponentsAs('cms', [
            Layout::class,
            Header::class,
            Navigation::class,
            Footer::class,
        ]);

    }

    // 註冊套件函式
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/cms.php', 'cms'
        );
        $this->app->singleton('Cms', function ($app) {
            return new Cms();
        });
    }
}