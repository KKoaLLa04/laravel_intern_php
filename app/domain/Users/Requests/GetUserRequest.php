<?php

namespace App\domain\Users\Requests;

use App\domain\Users\DTO\UserDTO;
use Illuminate\Foundation\Http\FormRequest;

class GetUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{
        return [

        ];
    }

    public function messages(): array{
        return [

        ];
    }


    public function getDTO(): UserDTO{
        return (new UserDTO())->fromRequest($this);
    }
}
