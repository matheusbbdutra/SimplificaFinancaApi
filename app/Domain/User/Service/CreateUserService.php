<?php

namespace App\Domain\User\Service;

use App\Application\DTO\User\CreateUserDTO;
use App\Domain\User\Entity\User;
use App\Domain\User\Mapper\UserMapper;
use Illuminate\Support\Facades\Hash;

class CreateUserService
{
    public function execute(CreateUserDTO $dto): User
    {
        return UserMapper::createDtoToEntity($dto, Hash::make($dto->password));
    }
}