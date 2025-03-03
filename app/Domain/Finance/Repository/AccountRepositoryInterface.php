<?php

namespace App\Domain\Finance\Repository;

use App\Domain\Finance\Entity\Account;

interface AccountRepositoryInterface
{
    public function save(Account $account): void;
}
