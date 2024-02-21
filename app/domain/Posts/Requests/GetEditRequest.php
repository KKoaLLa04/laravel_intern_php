<?php

namespace App\domain\Posts\Requests;

use App\domain\Posts\DTO\PostDetailDTO;
use Illuminate\Foundation\Http\FormRequest;

class GetEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'integer'
        ];
    }

    public function messages(): array
    {
        return [
           'id.integer' => 'id phai la kieu so'
        ];
    }

    public function getDTO(): PostDetailDTO
    {
        $this->validate($this->rules(),$this->messages());

        return (new PostDetailDTO())->fromRequest($this);
    }
}
