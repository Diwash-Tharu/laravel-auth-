<?php

namespace App\Providers;

use App\Models\Post;
use App\Repositories\PosiInterface;
use Illuminate\Support\ServiceProvider;
// use App\Repositories\PostInterface;
use App\Repositories\PostRepo;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        // $this -> app -> bind(
        //     'App\Repositories\PostInterface',
        //     'App\Repositories\PostRepository'
        // );
        //or
        $this -> app->bind(PosiInterface::class,PostRepo::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
