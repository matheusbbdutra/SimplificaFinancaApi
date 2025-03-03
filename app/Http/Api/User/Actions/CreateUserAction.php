<?php

namespace App\Http\Api\User\Actions;

use App\Application\UseCases\User\CreateUserUseCase;
use App\Http\Api\User\Requests\CreateUserRequest;
use Symfony\Component\HttpFoundation\Response;

readonly class CreateUserAction {
    public function __construct(private readonly CreateUserUseCase $createUserUseCase)
    {
    }

    public function __invoke(CreateUserRequest $request)
    {
        try {
            $request->validated();
            $this->createUserUseCase->execute($request->toDTO());

            return response()->json([], Response::HTTP_CREATED);
        } catch (\Throwable $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
