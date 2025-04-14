<?php

namespace App\Providers;

use App\Observers\SellerObserver;
use Illuminate\Support\ServiceProvider;
use App\Models\Seller;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Seller::observe(SellerObserver::class);
    }
}
