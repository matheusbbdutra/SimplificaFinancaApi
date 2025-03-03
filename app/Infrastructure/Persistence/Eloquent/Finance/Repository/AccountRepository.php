<?php

namespace App\Infrastructure\Persistence\Eloquent\Finance\Repository;

use App\Domain\Finance\Entity\Account;
use App\Domain\Finance\Repository\AccountRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Finance\Mapper\AccountMapper;
use Illuminate\Support\Facades\DB;

class AccountRepository implements AccountRepositoryInterface
{
    public function save(Account $account): void
    {
        DB::transaction(function () use ($account) {
            $accountModel = AccountMapper::entityToModel($account);
            $accountModel->save();
        });
    }
}