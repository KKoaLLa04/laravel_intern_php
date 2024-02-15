<?php

namespace App\domain\Roles\Requests;

use App\domain\Roles\DTO\RoleDTO;
use App\domain\Roles\Rules\IdRoleExistsRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRoleRequest extends FormRequest
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
//            'id' => ['required', 'integer', new IdRoleExistsRule(Auth::id())],
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

    public function prepareForValidation(): void
    {
        $this->merge([
            'id' => $this->id ?? 0
        ]);
    }

    public function getDTO(): RoleDTO{
        return (new RoleDTO())->fromRequest($this);
    }
}
