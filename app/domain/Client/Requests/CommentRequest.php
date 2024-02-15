<?php

namespace App\domain\Client\Requests;

use App\domain\Client\DTO\CommentDTO;
use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'content' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'email' => ':attribute không đúng định dạng email',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Họ và tên',
            'email' => 'Địa chỉ Email',
            'content' => 'Nội dung bình luận',
        ];
    }

    public function getDTO(): CommentDTO
    {
//        $this->validate($this->rules(),$this->messages(), $this->attributes());

        return (new CommentDTO())->fromRequest($this);
    }
}
