<?php

namespace App\domain\Roles\Requests;

use App\domain\Roles\DTO\RoleEditDTO;
use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'integer'
        ];
    }

    public function messages(): array
    {
        return [
            'id.integer' => 'id phai la kieu so'
        ];
    }

    public function getDTO(): RoleEditDTO{
        return (new RoleEditDTO())->fromRequest($this);
    }
}
