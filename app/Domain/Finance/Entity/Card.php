<?php

namespace App\Domain\Finance\Entity;

use App\Domain\User\Entity\User;

class Card
{
    private ?int $id = null;

    public function __construct(
        private User   $user,
        private string    $name,
        private int       $limit,
        private \DateTime $dueDate,
        private Banner    $banner,
    )
    {
    }

    public function getAccount(): User
    {
        return $this->user;
    }

    public function setAccount(User $user): void
    {
        $this->user = $user;
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
