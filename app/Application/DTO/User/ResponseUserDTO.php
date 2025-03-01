<?php

namespace App\Application\DTO\User;

readonly class ResponseUserDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $email,
    ){
    }
}
