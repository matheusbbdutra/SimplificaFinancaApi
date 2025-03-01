<?php

namespace App\Application\UseCases\User;

use App\Application\DTO\User\UpdateUserDTO;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Domain\User\Service\UpdateUserService;

readonly class UpdateUserUseCase
{
    public function __construct(
        public UpdateUserService $updateUserService,
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