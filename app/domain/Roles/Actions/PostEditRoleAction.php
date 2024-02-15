<?php

namespace App\domain\Roles\Actions;

use App\domain\Roles\DTO\RoleDTO;
use App\Models\Role;

class PostEditRoleAction
{
    public function __construct(
        protected Role $roles,
    )
    {
    }

    public function handle(RoleDTO $roleDTO){
        $roles = $this->roles->find($roleDTO->getId());

        $roles->update([
            'name' => $roleDTO->getName(),
            'display_name' => $roleDTO->getDisplayName(),
        ]);

        $roles->permissions()->sync($roleDTO->getPermissionId());
    }
}
