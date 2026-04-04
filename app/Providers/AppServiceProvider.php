<?php

namespace App\Providers;

use App\Interfaces\CustomPageInterface;
use App\Repositories\CustomPageRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind( CustomPageInterface::class,CustomPageRepository::class );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
