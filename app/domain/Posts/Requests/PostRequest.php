<?php

namespace App\domain\Posts\Requests;

use App\domain\Posts\DTO\PostsDTO;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'slug' => 'required|min:3',
            'description' => 'required',
            'content' => 'required',
            'thumbnail' => 'required',
            'cate_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề không được để trống',
            'title.min' => 'Tiêu đề không được nhỏ hơn :min ký tự',
            'slug.required' => 'Đưỡng dẫn tĩnh không được để trống',
            'slug.min' => 'Đườngan tinh khong duoc nho hon :min ky tu',
            'description.required' => 'Mô tả ngan khong duoc de trong',
            'content.required' => 'Noi dung khong duoc de trong',
            'thumbnail.required' => 'Vui lòng chọn ảnh',
            'cate_id.required' => 'Danh mục không được để trống',
            'cate_id.integer' => 'Đừng có phá của em :((',
            ];
    }

    public function getDTO(): PostsDTO
    {
        $this->validate($this->rules(),$this->messages());

        return (new PostsDTO())->fromRequest($this);
    }
}
