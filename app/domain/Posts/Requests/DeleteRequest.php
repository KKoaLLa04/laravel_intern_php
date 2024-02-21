<?php

namespace App\domain\Posts\Requests;

use App\domain\Posts\DTO\DeleteDTO;
use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
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

    public function messages()
    {
        return [
            'id.integer' => 'id phai la kieu so'
        ];
    }

    public function getDTO(): DeleteDTO
    {
        $this->validate($this->rules(),$this->messages());

        return (new DeleteDTO())->fromRequest($this);
    }
}
