<?php

namespace App\domain\Groups\Requests;

use App\domain\Groups\DTO\GroupDTO;
use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           'name' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên nhóm không được để trống',
            'name.min' => 'Tên nhóm không được nhỏ hơn :min ký tự',
            'name.unique' => 'Nhóm người dùng đã tồn tại'
            ];
    }

    public function getDTO(): GroupDTO
    {
        $this->validate($this->rules(),$this->messages());

        return (new GroupDTO())->fromRequest($this);
    }
}
