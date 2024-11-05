<?php

namespace App\Providers;

use App\Services\CareerAptitudeTestQuestionService;
use App\Services\Impl\CareerAptitudeTestQuestionServiceImpl;
use Illuminate\Support\ServiceProvider;

class CareerAptitudeTestQuestionProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CareerAptitudeTestQuestionService::class, CareerAptitudeTestQuestionServiceImpl::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
