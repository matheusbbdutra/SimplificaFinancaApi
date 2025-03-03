<?php

namespace App\Application\User\DTO;

readonly class ResponseUserDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $email,
    ){
    }
}
