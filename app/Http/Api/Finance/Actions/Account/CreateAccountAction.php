<?php

namespace App\Http\Api\Finance\Actions\Account;

use App\Application\UseCases\Finance\Account\CreateAccountUseCase;
use App\Http\Api\Finance\Requests\Account\CreateAccountRequest;
use Symfony\Component\HttpFoundation\Response;

readonly class CreateAccountAction
{
    public function __construct(private CreateAccountUseCase $createAccountUseCase)
    {
    }

    public function __invoke(CreateAccountRequest $request)
    {
        try {
            $request->validated();
            $this->createAccountUseCase->execute($request->toDTO());

            return response()->json([], Response::HTTP_CREATED);
        } catch (\Throwable $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}