<?php

namespace App\domain\Groups\Features;

use App\domain\Groups\Actions\AddPermissionAction;
use App\domain\Groups\DTO\PermissionDTO;

class AddPermissionFeature
{
    public function __construct(
        protected AddPermissionAction $addPermissionAction,
    )
    {
    }

    public function handle(PermissionDTO $permissionDTO): void{
        $this->addPermissionAction->handle($permissionDTO);
    }
}
