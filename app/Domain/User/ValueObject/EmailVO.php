<?php

namespace App\Domain\User\ValueObject;

class EmailVO
{
    public function __construct(public string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Invalid email address');
        }
    }

    public function toString(): string
    {
        return $this->email;
    }
}
