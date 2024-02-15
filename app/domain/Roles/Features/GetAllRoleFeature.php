<?php

namespace App\domain\Roles\Features;

use App\domain\Roles\Actions\GetAllRoleAction;

class GetAllRoleFeature
{
    public function __construct(
        protected GetAllRoleAction $getAllRoleAction
    )
    {
    }

    public function handle(){
        return $this->getAllRoleAction->handle();
    }
}
