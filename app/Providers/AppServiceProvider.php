<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;


use Illuminate\Support\ServiceProvider;
 //adicionado para rodar migration
 use Illuminate\Support\Facades\Schema;

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
        //
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
       

    }
}
