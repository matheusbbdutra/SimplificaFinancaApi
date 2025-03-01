<?php

namespace App\Infrastructure\Persistence\Eloquent\User\Mapper;

use App\Domain\User\Entity\User;
use App\Domain\User\ValueObject\EmailVO;
use App\Infrastructure\Persistence\Eloquent\User\Model\UserModel;

class UserMapper
{
    public static function toEntity(UserModel $model): User
    {
         return new User(
            name: $model->name,
            password: $model->password,
            email: new EmailVO($model->email)
        );
    }

    public static function toModel(User $entity): UserModel
    {
        $model = new UserModel([
            'name'     => $entity->getName(),
            'email'    => $entity->getEmail(),
            'password' => $entity->getPassword(),
        ]);

        if ($entity->getId()) {
            $model->setAttribute('id', $entity->getId());
        }

        return $model;
    }
}
