<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\FilmRepositoryInterface;
use App\Repositories\FilmRepository;


class FilmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(FilmRepositoryInterface::class,FilmRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
