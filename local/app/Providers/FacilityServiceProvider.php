<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FacilityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Backend\Facility\FacilityRepositoryInterface::class,
            \App\Repositories\Backend\Facility\FacilityRepository::class
        );
    }
}
