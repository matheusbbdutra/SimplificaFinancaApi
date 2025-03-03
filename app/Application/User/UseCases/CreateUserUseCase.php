<?php

namespace App\Application\User\UseCases;

use App\Application\User\DTO\CreateUserDTO;
use App\Application\User\Mapper\UserMapper;
use App\Domain\User\Repository\UserRepositoryInterface;
use App\Domain\User\Service\UserService;

readonly class CreateUserUseCase
{
    public function __construct(private UserRepositoryInterface $userRepository, private userService $userService)
    {
    }

    public function execute(CreateUserDTO $dto): void
    {
        $hashPassword = $this->userService->hashPassword($dto->password);
        $this->userRepository->save(UserMapper::createDtoToEntity($dto, $hashPassword));
    }
}
