<?php

namespace App\domain\Roles\Actions;

use App\domain\Roles\DTO\RoleDTO;
use App\Models\Role;

class PostAddRoleAction
{
    public function __construct(
        protected Role $roles,
    )
    {
    }

    public function handle(RoleDTO $roleDTO): void
    {
        $roles = $this->roles->create([
            'name' => $roleDTO->getName(),
            'display_name' => $roleDTO->getDisplayName(),
        ]);

        $roles->permissions()->attach($roleDTO->getPermissionId());
    }
}
