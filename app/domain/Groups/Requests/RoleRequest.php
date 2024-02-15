<?php

namespace App\domain\Groups\Requests;

use App\domain\Groups\DTO\RoleDTO;
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
            'name' => 'required|min:3|unique:role',
            'title' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên quyền không được để trống',
            'name.min' => 'Tên quyền không được nhỏ hơn :min ký tự',
            'name.unique' => 'Quyền đã tồn tại',
            'title.required' => 'Tiêu đề quyền không được để trống',
            'title.min' => 'Tiêu đề không được nhỏ hơn :min ký tự',
        ];
    }

    public function getDTO(): RoleDTO
    {
        return (new RoleDTO())->fromRequest($this);
    }
}
