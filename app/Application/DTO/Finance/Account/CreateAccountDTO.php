<?php

namespace App\Application\DTO\Finance\Account;

readonly class CreateAccountDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public int $userId,
    ) {
    }
}