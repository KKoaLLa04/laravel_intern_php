<?php

namespace App\domain\Roles\Rules;

use App\Models\Role;
use Illuminate\Contracts\Validation\Rule;

class IdRoleExistsRule implements Rule
{
    public function __construct(
        private int $UserId,
    )
    {
    }

    public function passes($attribute, $value): bool
    {
        return Role::where($attribute, $value)->exists();
    }

    public function message()
    {
        // TODO: Implement message() method.
    }
}
