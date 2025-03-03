<?php

namespace App\Application\UseCases\Finance\Account;

use App\Application\DTO\Finance\Account\CreateAccountDTO;
use App\Domain\Finance\Repository\AccountRepositoryInterface;
use App\Domain\Finance\Service\Account\CreateAccountService;
use App\Domain\User\Repository\UserRepositoryInterface;

readonly class CreateAccountUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
        private AccountRepositoryInterface $accountRepository,
        private CreateAccountService $createAccountService
    ) {

    }

    public function execute(CreateAccountDTO $createAccountDTO)
    {
        $user = $this->userRepository->findById($createAccountDTO->userId);

        if (!$user) {
            throw new \Exception('User not found');
        }

        $account = $this->createAccountService->execute($createAccountDTO, $user);
        $this->accountRepository->save($account);
    }
}