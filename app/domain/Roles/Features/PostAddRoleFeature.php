<?php

namespace App\domain\Roles\Features;

use App\domain\Roles\Actions\PostAddRoleAction;
use App\domain\Roles\DTO\RoleDTO;
use App\Models\Role;

class PostAddRoleFeature
{
    public function __construct(
        protected PostAddRoleAction $postAddRoleAction,
    )
    {
    }

    public function handle(RoleDTO $roleDTO): void
    {
        $this->postAddRoleAction->handle($roleDTO);
    }
}
