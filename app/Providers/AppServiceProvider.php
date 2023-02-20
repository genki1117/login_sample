<?php

namespace App\Providers;

use App\Domain\Repositories\Login\UserLoginRepository;
use App\Domain\Interface\Login\UserLoginInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserLoginInterface::class, UserLoginRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
