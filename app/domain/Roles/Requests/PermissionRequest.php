<?php

namespace App\domain\Roles\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
}
