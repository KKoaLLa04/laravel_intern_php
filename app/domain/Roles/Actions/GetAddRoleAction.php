<?php

namespace App\domain\Roles\Actions;

use App\Models\Permission;

class GetAddRoleAction
{
    public function __construct(
        protected Permission $permission,
    )
    {
    }

    public function handle(){
        return $this->permission->where('parent_id', 0)->get();
    }
}
