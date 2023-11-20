<?php

namespace Laravelzipconvertpro\Providers;

use Illuminate\Support\ServiceProvider;

class ZipServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}