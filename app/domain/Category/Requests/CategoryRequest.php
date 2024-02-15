<?php

namespace App\domain\Category\Requests;

use App\domain\Category\DTO\CategoryDTO;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề không được để trống',
            'title.min' => 'Tiêu đề không được nhỏ hơn :min ký tự',
            'slug.required' => 'Slug không được để trống',
            'slug.min' => 'Slug không được nhỏ hơn :min ký tự'
        ];
    }

    public function getDTO(): CategoryDTO
    {
        $this->validate($this->rules(),$this->messages());

        return (new CategoryDTO())->fromRequest($this);
    }
}
