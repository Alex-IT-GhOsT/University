<?php

namespace App\Providers;

use App\Repositories\StudentRepository;
use App\Service\StudentService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('StudentRepositoryInterface', StudentRepository::class);
        $this->app->bind('StudentServiceInterface', StudentService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
