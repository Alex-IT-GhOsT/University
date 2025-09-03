<?php

namespace App\Providers;

use App\Contracts\Repositories\ClassRoomRepositoryInterface;
use App\Contracts\Repositories\StudentRepositoryInterface;
use App\Contracts\Services\ClassRoomServiceInterface;
use App\Contracts\Services\StudentServiceInterface;
use App\Repositories\ClassRoomRepository;
use App\Repositories\StudentRepository;
use App\Service\ClassRoomService;
use App\Service\StudentService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(StudentServiceInterface::class, StudentService::class);
        $this->app->bind(ClassRoomRepositoryInterface::class, ClassRoomRepository::class);
        $this->app->bind(ClassRoomServiceInterface::class, ClassRoomService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
