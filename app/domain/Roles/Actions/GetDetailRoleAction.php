<?php

namespace App\domain\Roles\Actions;

use App\domain\Roles\DTO\RoleEditDTO;
use App\Models\Role;

class GetDetailRoleAction
{
    public function __construct(
        protected Role $roles
    )
    {
    }

    public function handle(RoleEditDTO $roleEditDTO){
        return $this->roles->find($roleEditDTO->getId());
    }
}
