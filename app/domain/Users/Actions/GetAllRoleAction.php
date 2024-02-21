<?php

namespace App\domain\Users\Actions;

use App\domain\Users\DTO\UserDTO;
use App\Models\Role;

class GetAllRoleAction
{
    public function __construct(
        protected Role $role,
    )
    {
    }

    public function handle(): \Illuminate\Database\Eloquent\Collection
    {
        return Role::all();
    }
}
