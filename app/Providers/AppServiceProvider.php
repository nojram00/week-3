<?php

namespace App\Providers;

use Database\Factories\StudentFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->singleton('App\Services\StudentService', function ($app) {
        //     return new \App\Services\StudentService();
        // });

        $this->app->bind(StudentFactory::class, function ($app) {
            return new StudentFactory();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
