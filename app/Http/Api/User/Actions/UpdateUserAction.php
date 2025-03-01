<?php

namespace App\Http\Api\User\Actions;

use App\Application\UseCases\User\UpdateUserUseCase;
use App\Http\Api\User\Requests\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Response;

readonly class UpdateUserAction
{
    public function __construct(private UpdateUserUseCase $updateUserUseCase)
    {
    }

    public function __invoke(UpdateUserRequest $request)
    {
        try {

            $request->validated();
            $this->updateUserUseCase->execute($request->toDTO());

            return response()->json([], Response::HTTP_OK);
        } catch (\Throwable $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
