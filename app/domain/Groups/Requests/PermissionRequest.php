<?php

namespace App\domain\Groups\Requests;

use App\domain\Groups\DTO\PermissionDTO;
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
            'role_id' => 'required|integer',
            'module_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'role_id.required' => 'Tên quyền không được để trống',
            'role_id.integer' => 'Tên quyền phải là kieu số',
            'module_id.required' => 'Tiêu đề quyền không được để trống',
            'module_id.integer' => 'Tiêu đề quyền phải là kiểu số',
        ];
    }

    public function getDTO(): PermissionDTO
    {
        return (new PermissionDTO())->fromRequest($this);
    }
}
