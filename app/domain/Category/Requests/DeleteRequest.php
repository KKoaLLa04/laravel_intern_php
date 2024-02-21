<?php

namespace App\domain\Category\Requests;

use App\domain\Category\DTO\DeleteDTO;
use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function getDTO(): DeleteDTO{
        return (new DeleteDTO())->fromRequest($this);
    }
}
