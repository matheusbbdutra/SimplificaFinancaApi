<?php

namespace App\Http\Api\User\Requests;

use App\Application\DTO\User\CreateUserDTO;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ];
    }

    public function toDTO(): CreateUserDTO
    {
        return new CreateUserDTO(
            $this->input('name'),
            $this->input('email'),
            $this->input('password')
        );
    }
}