<?php

namespace App\domain\Roles\Requests;

use App\domain\Roles\DTO\RoleDTO;
use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function messages()
    {
        return [
        ];
    }

    public function getDTO(): RoleDTO{
        return (new RoleDTO())->fromRequest($this);
    }
}
