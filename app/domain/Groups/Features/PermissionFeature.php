<?php

namespace App\domain\Groups\Features;

use App\domain\Groups\Actions\PermissionAction;

class PermissionFeature
{
    public function __construct(
        protected PermissionAction $permissionAction
    )
    {
    }

    public function handle(){
        return $this->permissionAction->handle();
    }
}
