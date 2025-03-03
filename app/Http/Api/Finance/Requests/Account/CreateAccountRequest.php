<?php

namespace App\Http\Api\Finance\Requests\Account;

use App\Application\DTO\Finance\Account\CreateAccountDTO;
use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string:max:255',
            'description' => 'required|string:max:255',
        ];
    }

    public function toDTO(): CreateAccountDTO
    {
        $userId = auth()->id();

        return new CreateAccountDTO(
            $this->input('name'),
            $this->input('description'),
            $userId
        );
    }
}