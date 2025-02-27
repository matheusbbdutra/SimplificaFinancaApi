<?php

namespace App\Domain\Finance\Entity;

class Banner
{
    private ?int $id = null;

    public function __construct(private string $bandeira)
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getBandeira(): string
    {
        return $this->bandeira;
    }

    public function setBandeira(string $bandeira): void
    {
        $this->bandeira = $bandeira;
    }
}
