<?php

namespace App\domain\Roles\Actions;

use App\Models\Role;

class GetAllRoleAction
{
    public function __construct(
        protected Role $roles,
    )
    {
    }

    public function handle(){
        return $this->roles->get();
    }
}
