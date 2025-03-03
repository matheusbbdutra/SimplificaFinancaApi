<?php

namespace App\Application\User\UseCases;

use App\Application\User\DTO\UpdateUserDTO;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Domain\User\Service\UserService;

readonly class UpdateUserUseCase
{
    public function __construct(
        public UserService $updateUserService,
        public UserRepositoryInterface $userRepository
    ) {
    }

    public function execute(UpdateUserDTO $dto): void
    {
        $user = $this->userRepository->findById($dto->id);
        $userUpdate = $this->updateUserService->update($dto, $user);
        $this->userRepository->update($userUpdate);
    }
}
