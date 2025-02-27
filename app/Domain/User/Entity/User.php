<?php

namespace App\Domain\User\Entity;

class User
{
    public function __construct(
        private string $name,
        private string $email,
        private string $password
    ) {
        $this->password = $this->passwordHash($password);
    }

    public function verifyHash(string $senha): bool
    {
        return password_verify($senha, $this->password);
    }

    private function passwordHash(string $senha): string
    {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
