<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
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

        Blade::if('usuario', function () {
            if (Auth::user() && Auth::user()->getRole() == 1) {
                return 1;
            }
            return 0;
        });

        Blade::if('admin', function () {
            if (Auth::user() && Auth::user()->getRole() == 2) {
                return 1;
            }
            return 0;
        });

    }
}
