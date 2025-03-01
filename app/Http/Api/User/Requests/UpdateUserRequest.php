<?php

namespace App\Http\Api\User\Requests;

use App\Application\DTO\User\UpdateUserDTO;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'email' => 'email|max:255',
            'password' => 'string|min:8',
        ];
    }

    public function toDTO(): UpdateUserDTO
    {
        $user = auth()->id();

        return new UpdateUserDTO(
            $user,
            $this->input('name'),
            $this->input('email'),
            $this->input('password')
        );
    }

}