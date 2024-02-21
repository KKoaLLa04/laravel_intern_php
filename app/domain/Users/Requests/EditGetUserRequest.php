<?php

namespace App\domain\Users\Requests;

use App\domain\Users\DTO\UserDTO;
use Illuminate\Foundation\Http\FormRequest;

class EditGetUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{
        return [
            'id' => 'integer|required'
        ];
    }

    public function messages(): array{
        return [
            'required' => ':attribute không đuợc để trống',
            'integer' => ':attribute phải là số nguyên',
        ];
    }

    public function getDTO(): UserDTO{
        $this->validate($this->rules(),$this->messages(),$this->attributes());

        return (new UserDTO())->fromRequest($this);
    }
}
