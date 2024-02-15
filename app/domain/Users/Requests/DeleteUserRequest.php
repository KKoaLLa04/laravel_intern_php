<?php

namespace App\domain\Users\Requests;

use App\domain\Users\DTO\UserDTO;
use Illuminate\Foundation\Http\FormRequest;

class DeleteUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{

    }

    public function messages(): array{
    }

    public function attributes(): array{
    }

    public function getDTO(): UserDTO{
        return (new UserDTO())->fromRequest($this);
    }
}
