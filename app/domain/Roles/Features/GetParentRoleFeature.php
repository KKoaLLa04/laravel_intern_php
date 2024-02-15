<?php

namespace App\domain\Roles\Features;

use App\domain\Roles\Actions\GetParentRoleAction;

class GetParentRoleFeature
{
    public function __construct(
        protected GetParentRoleAction $getParentRoleAction
    )
    {
    }

    public function handle(){
        return $this->getParentRoleAction->handle();
    }
}
