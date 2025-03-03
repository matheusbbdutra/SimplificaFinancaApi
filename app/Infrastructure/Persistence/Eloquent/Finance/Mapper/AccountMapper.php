<?php

namespace App\Infrastructure\Persistence\Eloquent\Finance\Mapper;

use App\Domain\Finance\Entity\Account;
use App\Infrastructure\Persistence\Eloquent\Finance\Model\AccountModel;

class AccountMapper
{
    public static function entityToModel(Account $account): AccountModel
    {
        return new AccountModel([
            'name' => $account->getName(),
            'description' => $account->getDescription(),
            'user_id' => $account->getUser()->getId(),
            'amount' => $account->getAmount(),
        ]);
    }
}
