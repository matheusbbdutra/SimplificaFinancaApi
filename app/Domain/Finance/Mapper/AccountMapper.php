<?php

namespace App\Domain\Finance\Mapper;

use App\Application\DTO\Finance\Account\CreateAccountDTO;
use App\Domain\Finance\Entity\Account;
use App\Domain\User\Entity\User;

class AccountMapper
{
    public static function toEntity(CreateAccountDTO $dto, User $user): Account
    {
        return new Account(
            name: $dto->name,
            description: $dto->description,
            user: $user
        );
    }
}
