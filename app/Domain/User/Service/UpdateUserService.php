<?php

namespace App\Domain\User\Service;

use App\Application\DTO\User\UpdateUserDTO;
use App\Domain\User\Entity\User;
use App\Domain\User\ValueObject\EmailVO;
use Illuminate\Support\Facades\Hash;

class UpdateUserService
{
    public function update(UpdateUserDTO $dto, ?User $user): User
    {
        if (!$user) {
            throw new \Exception('User not found');
        }

        $user->setId($dto->id);

        if ($dto->name) {
            $user->setName($dto->name);
        }

        if ($dto->email) {
            $user->setEmail(new EmailVO($dto->email));
        }
        if ($dto->password) {
            $user->setPassword(Hash::make($dto->password));
        }

        return $user;
    }
}