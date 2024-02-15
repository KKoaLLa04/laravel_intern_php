<?php

namespace App\domain\Category\Requests;

use App\domain\Category\DTO\FindCateDTO;
use Illuminate\Foundation\Http\FormRequest;

class FindCateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function getDTO(): FindCateDTO{
        return (new FindCateDTO())->fromRequest($this);
    }
}
