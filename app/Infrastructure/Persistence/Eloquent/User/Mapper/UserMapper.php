<?php

namespace App\Infrastructure\Persistence\Eloquent\User\Mapper;

use App\Domain\User\Entity\User;
use App\Infrastructure\Persistence\Eloquent\User\Model\UserModel;

class UserMapper
{
    public static function toEntity(UserModel $model): User
    {
         return new User(
            $model->name,
            $model->email,
            $model->password
        );
    }

    public static function toModel(User $entity): UserModel
    {
        $model = new UserModel();
        $model->name     = $entity->getName();
        $model->email    = $entity->getEmail();
        $model->password = $entity->getPassword();

        return $model;
    }
}
