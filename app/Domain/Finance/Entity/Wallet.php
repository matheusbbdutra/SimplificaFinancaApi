<?php

namespace App\Domain\Finance\Entity;

use Illuminate\Support\Collection;

class Wallet
{
    private ?int $id = null;

    public function __construct(
        private string      $name,
        private string      $description,
        private float       $balance = 0.0,
        private Account $accounts
    ) {
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getAccounts(): Collection
    {
        return $this->accounts;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function addBalance(float $balance): void
    {
        $this->balance += $balance;
    }
    public function debitBallance(float $ballance): void
    {
        $this->balance -= $ballance;
    }
}
