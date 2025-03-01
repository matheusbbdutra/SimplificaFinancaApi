<?php

namespace App\Domain\User\Entity;

use App\Domain\Finance\Entity\Account;
use App\Domain\User\ValueObject\EmailVO;
use Illuminate\Support\Collection;

class User
{
    private ?int $id = null;
    private Collection $accounts;

    public function __construct(
        private string $name,
        private string $password,
        private EmailVO $email,
    ) {
        $this->accounts = new Collection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email->toString();
    }

    public function setEmail(EmailVO $email): void
    {
        $this->email = $email;
    }

    public function getAccounts(): Collection
    {
        return $this->accounts;
    }

    public function addAccount(Account $account): void
    {
        if (!$this->accounts->contains($account)) {
            $this->accounts->push($account);
            $account->setUser($this);
        }
    }

    public function removeAccount(Account $account): void
    {
        $index = $this->accounts->search($account);
        if ($index !== false) {
            $this->accounts->forget($index);
            $account->setUser(null);
        }
    }
}
