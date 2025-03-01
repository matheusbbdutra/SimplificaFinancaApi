<?php

namespace App\Providers;

use App\Domain\User\Repository\UserRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\User\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
