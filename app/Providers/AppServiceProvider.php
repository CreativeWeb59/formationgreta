<?php

namespace App\Providers;
// ajout pour fonctionnement des migrations
use Illuminate\Support\Facades\Schema;

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
        // ajout pour fonctionnement des migrations
        Schema::defaultStringLength(191);
    }
}
