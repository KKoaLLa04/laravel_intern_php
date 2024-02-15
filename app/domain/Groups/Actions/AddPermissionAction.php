<?php

namespace App\domain\Groups\Actions;

use App\domain\Groups\DTO\PermissionDTO;
use App\Models\Permission;

class AddPermissionAction
{
    public function __construct(
        protected Permission $permission
    )
    {
    }

    public function handle(PermissionDTO $permissionDTO): void{
        $roleId = $permissionDTO->getRoleId();
        $moduleId = $permissionDTO->getModuleId();
        $check = $this->permission->where('module_id', $moduleId)->where('role_id',$roleId)->first();
        if(!$check){
            $this->permission->role_id = $permissionDTO->getRoleId();
            $this->permission->module_id = $permissionDTO->getModuleId();
            $this->permission->save();
        }
    }
}
