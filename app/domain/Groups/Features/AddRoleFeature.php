<?php

namespace App\domain\Groups\Features;

use App\domain\Groups\Actions\AddRoleAction;
use App\domain\Groups\DTO\RoleDTO;

class AddRoleFeature
{
    public function __construct(
        protected AddRoleAction $addRoleAction
    )
    {
    }

    public function handle(RoleDTO $roleDTO): void{
        $this->addRoleAction->handle($roleDTO);
    }
}
