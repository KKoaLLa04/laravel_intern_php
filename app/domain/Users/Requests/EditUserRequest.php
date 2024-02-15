<?php

namespace App\domain\Users\Requests;

use App\domain\Users\DTO\UserDTO;
use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{
        return [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email,'.$this->id,
            'username' => 'required|min:4',
//            'group_id' => 'required|integer',
        ];
    }

    public function messages(): array{
        return [
            'required' => ':attribute không đuợc để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'email' => ':attribute không đúng định dang email',
            'unique' => ':attribute đã được sử dụng',
            'integer' => ':attribute phải là số nguyên',
        ];
    }

    public function attributes(): array{
        return [
            'name' => 'Họ và tên',
            'email' => 'Địa chỉ email',
            'username' => 'Tên đăng nhập',
            'group_id' => 'Nhóm nguời dùng',
        ];
    }

    public function getDTO(): UserDTO{
        $this->validate($this->rules(),$this->messages(),$this->attributes());

        return (new UserDTO())->fromRequest($this);
    }
}
