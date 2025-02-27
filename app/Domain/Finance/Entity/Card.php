<?php

namespace App\Domain\Finance\Entity;

class Card
{
    private ?int $id = null;

    public function __construct(
        private Account $account,
        private string $name,
        private int $limit,
        private \DateTime $dueDate,
        private Banner $banner,
    )
    {
    }

    public function getAccount(): Account
    {
        return $this->account;
    }

    public function setAccount(Account $account): void
    {
        $this->account = $account;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getDueDate(): \DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    public function getBanner(): Banner
    {
        return $this->banner;
    }

    public function setBanner(Banner $banner): void
    {
        $this->banner = $banner;
    }
}
