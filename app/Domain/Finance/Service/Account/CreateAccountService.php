<?php

namespace App\Domain\Finance\Service\Account;

use App\Application\DTO\Finance\Account\CreateAccountDTO;
use App\Domain\Finance\Entity\Account;
use App\Domain\Finance\Mapper\AccountMapper;
use App\Domain\User\Entity\User;

readonly class CreateAccountService
{

    public function execute(CreateAccountDTO $createAccountDTO, User $user): Account
    {
        return AccountMapper::toEntity($createAccountDTO, $user);
    }

}