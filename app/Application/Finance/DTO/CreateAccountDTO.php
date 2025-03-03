<?php

namespace App\Application\Finance\DTO;

readonly class CreateAccountDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public int $userId,
    ) {
    }
}
