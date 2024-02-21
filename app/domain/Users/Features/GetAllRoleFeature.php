<?php

namespace App\domain\Users\Features;

use App\domain\Users\Actions\GetAllRoleAction;

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
