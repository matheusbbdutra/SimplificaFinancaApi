<?php

namespace App\Application\User\Mapper;

use App\Application\User\DTO\CreateUserDTO;
use App\Domain\User\Entity\User;
use App\Domain\User\ValueObject\EmailVO;

class UserMapper
{
    public static function createDtoToEntity(CreateUserDTO $dto, string $hashPassword): User
    {
        return new User(
            name: $dto->name,
            password: $hashPassword,
            email: new EmailVO($dto->email),
        );
    }
}
