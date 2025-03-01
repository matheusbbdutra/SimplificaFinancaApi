<?php

namespace App\Domain\Finance\Entity;

class Transaction
{
    private ?int $id = null;

    public function __construct(
        private Account         $account,
        private string          $description,
        private float           $amount,
        private TransactionType $type,
        private \DateTime       $releaseDate,
        private \DateTime       $dueDate,
        private Category        $category,
        private SubCategory     $subCategory,
        private ?Account        $destinationAccount,
        private ?string         $recurrence,
        private ?int            $installment,
        private ?int            $installments,
        private ?Card           $card,
    )
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

    public function getAccount(): Account
    {
        return $this->account;
    }

    public function setAccount(Account $account): void
    {
        $this->account = $account;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getType(): TransactionType
    {
        return $this->type;
    }

    public function setType(TransactionType $type): void
    {
        $this->type = $type;
    }

    public function getReleaseDate(): \DateTime
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTime $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getDueDate(): \DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    public function getDestinationAccount(): ?Account
    {
        return $this->destinationAccount;
    }

    public function setDestinationAccount(?Account $destinationAccount): void
    {
        $this->destinationAccount = $destinationAccount;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): void
    {
        $this->recurrence = $recurrence;
    }

    public function getInstallment(): ?int
    {
        return $this->installment;
    }

    public function setInstallment(?int $installment): void
    {
        $this->installment = $installment;
    }

    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    public function setInstallments(?int $installments): void
    {
        $this->installments = $installments;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(?Card $card): void
    {
        $this->card = $card;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getSubCategory(): SubCategory
    {
        return $this->subCategory;
    }

    public function setSubCategory(SubCategory $subCategory): void
    {
        $this->subCategory = $subCategory;
    }


}
