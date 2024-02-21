<?php

namespace App\domain\Users\Requests;

use App\domain\Users\DTO\UserDTO;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{
        return [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:4',
            'role' => 'required|integer',
            'password' => 'required|min:3',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages(): array{
        return [
            'required' => ':attribute không đuợc để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'email' => ':attribute không đúng định dang email',
            'unique' => ':attribute đã được sử dụng',
            'integer' => ':attribute phải là số nguyên',
            'same' => ':attribute không trùng khớp'
        ];
    }

    public function attributes(): array{
        return [
          'name' => 'Họ và tên',
          'email' => 'Địa chỉ email',
          'username' => 'Tên đăng nhập',
          'role' => 'Nhóm nguời dùng',
          'password' => 'Mật khẩu',
          'password_confirmation' => 'Nhập lại mật khẩu',
        ];
    }

    public function getDTO(): UserDTO{
        $this->validate($this->rules(),$this->messages(),$this->attributes());

        return (new UserDTO())->fromRequest($this);
    }
}
