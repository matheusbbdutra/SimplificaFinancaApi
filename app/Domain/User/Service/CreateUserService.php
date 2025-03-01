<?php

namespace App\Domain\User\Service;

use App\Application\DTO\User\CreateUserDTO;
use App\Domain\User\Entity\User;
use App\Domain\User\Mapper\UserMapper;

class CreateUserService
{
    public function execute(CreateUserDTO $dto): User
    {
        return UserMapper::dtoToEntity($dto);
    }
}