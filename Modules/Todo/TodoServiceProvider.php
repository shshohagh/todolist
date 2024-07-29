<?php

namespace Modules\Todo;

use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/Views', 'todo');
    }

    public function register()
    {
        // Register any bindings or services
    }
}
