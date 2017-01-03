<?php

namespace Beaumind\Jdate;

use Illuminate\Support\ServiceProvider;

class JDateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('jdate', function()
        {
            return new JDate();
        });
    }
}
