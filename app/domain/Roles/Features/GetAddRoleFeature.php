<?php

namespace App\domain\Roles\Features;

use App\domain\Roles\Actions\GetAddRoleAction;

class GetAddRoleFeature
{
    public function __construct(
        protected GetAddRoleAction $getAddRoleAction,
    )
    {
    }

    public function handle(){
        return $this->getAddRoleAction->handle();
    }
}
