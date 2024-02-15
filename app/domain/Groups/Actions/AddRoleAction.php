<?php

namespace App\domain\Groups\Actions;

use App\domain\Groups\DTO\RoleDTO;
use App\Models\Role;

class AddRoleAction
{
    public function __construct(
        protected Role $role,
    )
    {
    }

    public function handle(RoleDTO $roleDTO){
        $this->role->name = $roleDTO->getName();
        $this->role->title = $roleDTO->getTitle();
        $this->role->save();
    }
}
