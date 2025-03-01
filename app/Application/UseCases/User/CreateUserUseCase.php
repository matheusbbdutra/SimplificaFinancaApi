<?php

namespace App\Application\UseCases\User;

use App\Application\DTO\User\CreateUserDTO;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Domain\User\Service\CreateUserService;

readonly class CreateUserUseCase
{
    public function __construct(
        public CreateUserService $createUserService,
        public UserRepositoryInterface $userRepository
    ) {
    }

    public function execute(CreateUserDTO $data): void
    {
        $user = $this->createUserService->execute($data);
        $this->userRepository->save($user);
    }
}