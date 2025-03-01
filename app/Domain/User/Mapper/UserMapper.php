<?php

namespace App\Domain\User\Mapper;

use App\Application\DTO\User\CreateUserDTO;
use App\Domain\User\Entity\User;
use App\Domain\User\ValueObject\EmailVO;

class UserMapper
{
    public static function createDtoToEntity(CreateUserDTO $dto, ?string $hashPassword): User
    {
        return new User(
            name: $dto->name,
            password: $hashPassword ?? $dto->password,
            email: new EmailVO($dto->email),
        );
    }
}
