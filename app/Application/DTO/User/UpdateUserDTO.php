<?php

namespace App\Application\DTO\User;

readonly class UpdateUserDTO
{
    public function __construct(
        public ?int  $id,
        public ?string $name,
        public ?string $email,
        public ?string $password,
    ) {
    }
}
