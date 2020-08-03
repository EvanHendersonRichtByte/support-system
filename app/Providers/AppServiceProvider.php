<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
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
        view()->composer('partials.user.navbar', function ($view) {
            view()->share('logged_in', Session::get('logged_in'));
            view()->share('user', Session::get('user'));
        });
        view()->composer('welcome', function ($view) {
            view()->share('user', Session::get('user'));
        });
    }
}
