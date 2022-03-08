<?php
# CmsServiceProvider.php

namespace Manfai\Cms;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/cms.php' => config_path('cms.php')
        ], 'config');
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');
        $this->publishes([
            __DIR__.'/../views/' => base_path('resources/views/vendor/cms-pages'),
            __DIR__.'/../js/' => base_path('resources/assets/js/vendor/cms-pages')
        ], 'assets');
        $this->loadRoutesFrom(__DIR__.'/../routes/cms.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cms');
    }

    // 註冊套件函式
    public function register()
    {
        $configPath = __DIR__ . '/../config/cms.php';
        $this->mergeConfigFrom($configPath, 'cms');

        $this->app->singleton('Cms', function ($app) {
            return new Cms();
        });
    }
}