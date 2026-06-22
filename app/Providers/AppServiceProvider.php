<?php

namespace App\Providers;

use App\Interfaces\CustomPageInterface;
use App\Repositories\CustomPageRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        if (env('APP_ENV') !== 'local') {
               URL::forceScheme('https');
        }

        $this->app->bind( CustomPageInterface::class,CustomPageRepository::class );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
