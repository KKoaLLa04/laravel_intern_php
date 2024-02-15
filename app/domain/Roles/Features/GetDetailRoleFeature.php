<?php

namespace App\domain\Roles\Features;

use App\domain\Roles\Actions\GetDetailRoleAction;
use App\domain\Roles\DTO\RoleEditDTO;

class GetDetailRoleFeature
{
    public function __construct(
        protected GetDetailRoleAction $getDetailRoleAction,
    )
    {
    }

    public function handle(RoleEditDTO $roleEditDTO){
        return $this->getDetailRoleAction->handle($roleEditDTO);
    }
}
