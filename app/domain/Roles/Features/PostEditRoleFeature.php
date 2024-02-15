<?php

namespace App\domain\Roles\Features;

use App\domain\Roles\Actions\PostEditRoleAction;
use App\domain\Roles\DTO\RoleDTO;

class PostEditRoleFeature
{
    public function __construct(
        protected PostEditRoleAction $postEditRoleAction
    )
    {
    }

    public function handle(RoleDTO $roleDTO): void
    {
        $this->postEditRoleAction->handle($roleDTO);
    }

}
