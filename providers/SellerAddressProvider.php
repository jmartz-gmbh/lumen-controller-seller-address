<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SellerAddressProvider
 * @package App\Providers
 */
class SellerAddressProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
