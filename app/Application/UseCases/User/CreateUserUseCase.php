<?php

namespace App\Application\UseCases\User;

use App\Application\DTO\User\CreateUserDTO;
use App\Domain\User\Service\CreateUserService;
use App\Infrastructure\Persistence\Eloquent\User\Repository\UserRepository;

class CreateUserUseCase
{
    public function __construct(
        public readonly CreateUserService $createUserService,
        public readonly UserRepository $userRepository
    ) {
    }

    public function execute(CreateUserDTO $data): void
    {
        $user = $this->createUserService->execute($data);
        $this->userRepository->save($user);
    }
}