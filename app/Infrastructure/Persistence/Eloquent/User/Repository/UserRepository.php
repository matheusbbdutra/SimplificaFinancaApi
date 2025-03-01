<?php

namespace App\Infrastructure\Persistence\Eloquent\User\Repository;

use App\Domain\User\Entity\User;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\User\Mapper\UserMapper;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryInterface
{

    public function save(User $user): void
    {
        DB::transaction(function () use ($user) {
            $userModel = UserMapper::toModel($user);
            $userModel->save();
        });
    }
}