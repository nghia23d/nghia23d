<?php
namespace nghia23d\cms\Providers;

use Illuminate\Support\ServiceProvider;
use nghia23d\cms\Console\Commands\CreateAdmin;

class CmsServiceProvider extends ServiceProvider
{
    private $configFile = [
        'cms' => '/../../config/core.php',
    ];

    public function register()
    {
        // register your config file here
        foreach ($this->configFile as $alias => $path) {
            $this->mergeConfigFrom(__DIR__ . "/" . $path, $alias);
        }
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'cms');
        $this->commands([
            CreateAdmin::class,
        ]);
    }
}
