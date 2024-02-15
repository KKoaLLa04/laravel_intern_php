<?php

namespace App\domain\Roles\Requests;

use App\domain\Roles\DTO\RoleDTO;
use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'display_name' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên chức vụ không được để trống',
            'name.min' => 'Tên chức vụ không được nhỏ hơn :min ký tự',
            'display_name.required' => 'Mô tả chức vụ không được để trống',
            'display_name.min' => 'Mô tả chức vụ không được nhỏ hơn :min ký tự'
        ];
    }

    public function getDTO(): RoleDTO{
        return (new RoleDTO())->fromRequest($this);
    }
}
