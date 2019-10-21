<?php

namespace App\Providers;

use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class GlobalTemplateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.app'], function ($view) {
            $view->with('cartCount', Cart::all()->count());
        });

        view()->composer(['layouts.app'], function ($view) {
            $view->with('user', Auth::user());
        });
    }
}
