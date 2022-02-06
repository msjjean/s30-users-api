<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UsersRepository;
use App\Repositories\UsersRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // bind the repository to the interface
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
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
