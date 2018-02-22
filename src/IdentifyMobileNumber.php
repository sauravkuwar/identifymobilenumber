<?php

namespace Saurav\IdentifyMobileNumber;

use Illuminate\Support\ServiceProvider;
use Saurav\IdentifyMobileNumber\Library\IdentifyMobileNumberLibrary;

class IdentifyMobileNumber extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Saurav\IdentifyMobileNumber\Library\IdentifyMobileNumberLibrary::class, function ($app) {
            return new IdentifyMobileNumberLibrary;
        });

        $this->app->alias(Saurav\IdentifyMobileNumber\Library\IdentifyMobileNumberLibrary::class, 'identify-mobile-number-library');
    }
}
