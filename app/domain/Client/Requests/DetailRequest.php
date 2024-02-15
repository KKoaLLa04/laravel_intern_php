<?php

namespace App\domain\Client\Requests;

use App\domain\Client\DTO\DetailDTO;
use Illuminate\Foundation\Http\FormRequest;

class DetailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function messages()
    {
        return [

        ];
    }

    public function getDTO(): DetailDTO
    {
        $this->validate($this->rules(),$this->messages());

        return (new DetailDTO())->fromRequest($this);
    }
}
