<?php

namespace App\Providers;

use App\Domain\Finance\Repository\AccountRepositoryInterface;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Finance\Repository\AccountRepository;
use App\Infrastructure\Persistence\Eloquent\User\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
    }
}
