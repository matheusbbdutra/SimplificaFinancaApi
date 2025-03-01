<?php

namespace App\Domain\User\Mapper;

use App\Application\DTO\User\CreateUserDTO;
use App\Domain\User\Entity\User;
use App\Domain\User\ValueObject\EmailVO;

class UserMapper
{
    public static function entityToDTO(User $entity): CreateUserDTO
    {
        return new CreateUserDTO(
            name: $entity->getName(),
            email: $entity->getEmail(),
            password: $entity->getPassword(),
        );
    }

    public static function dtoToEntity(CreateUserDTO $dto): User
    {
        return new User(
            name: $dto->name,
            password: $dto->password,
            email: new EmailVO($dto->email),
        );
    }
}
