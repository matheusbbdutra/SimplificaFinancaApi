<?php

namespace App\Domain\Finance\Entity;

use Illuminate\Support\Collection;

class Account
{
    private ?int $id = null;

    public function __construct(
        private string $name,
        private string $description,
        private Collection $wallets = new Collection(),
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

    public function addAccount($account): void
    {
        if (!$this->wallets->contains($account)) {
            $this->wallets->push($account);;
        }
    }

    public function removeAccount($account): void
    {
        $index = $this->wallets->search($account);
        if ($index !== false) {
            $this->wallets->forget($index);
        }
    }
}
