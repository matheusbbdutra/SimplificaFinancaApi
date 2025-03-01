<?php

namespace App\Infrastructure\Persistence\Eloquent\User\Repository;

use App\Domain\User\Entity\User;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\User\Mapper\UserMapper;
use App\Infrastructure\Persistence\Eloquent\User\Model\UserModel;
use Carbon\Carbon;
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

    public function findById(int $id): ?User
    {
        $userModel = UserModel::find($id);
        return $userModel ? UserMapper::toEntity($userModel) : null;
    }

    public function update(User $user): void
    {
        DB::transaction(function () use ($user) {
            DB::table('users')
                ->where('id', $user->getId())
                ->update([
                    'name'       => $user->getName(),
                    'email'      => $user->getEmail(),
                    'password'   => $user->getPassword(),
                    'updated_at' => Carbon::now(),
                ]);
        });
    }
}