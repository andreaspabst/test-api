<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

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
        // Disable Data Wrapping Completely
        JsonResource::withoutWrapping();

        // Only disables Data Wrapping for Post Resource e.g.
        // PostResource::withoutWrapping();
    }
}
