<?php

namespace App\Providers;

use App\Models\Information;
use App\Models\Services;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $servicesdata=Services::all();
        View::share('servicesdata', Services::all());
        View::share('information', Information::first());
    }
}
