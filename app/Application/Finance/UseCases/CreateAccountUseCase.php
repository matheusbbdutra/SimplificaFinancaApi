<?php

namespace App\Application\Finance\UseCases;

use App\Application\Finance\DTO\CreateAccountDTO;
use App\Application\Finance\Mapper\AccountMapper;
use App\Domain\Finance\Repository\AccountRepositoryInterface;
use App\Domain\User\Repository\UserRepositoryInterface;

readonly class CreateAccountUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
        private AccountRepositoryInterface $accountRepository
    ) {

    }

    public function execute(CreateAccountDTO $createAccountDTO)
    {
        $user = $this->userRepository->findById($createAccountDTO->userId);

        if (!$user) {
            throw new \Exception('User not found');
        }

        $this->accountRepository->save(AccountMapper::toEntity($createAccountDTO, $user));
    }
}
