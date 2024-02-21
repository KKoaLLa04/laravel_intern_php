<?php

namespace App\domain\Roles\Actions;

use App\domain\Roles\DTO\RoleDTO;
use App\Models\Permission;

class PerMissionAddAction
{
    public function __construct(
        protected Permission $permission
    )
    {
    }

    public function handle(RoleDTO $roleDTO): void
    {
//        $permission = $this->permission::create([
//            'name' => $permissionRequest->module_parent,
//            'display_name' => $permissionRequest->module_parent,
//            'parent_id' => 0,
//        ]);
//
//        foreach($permissionRequest->module_children as $value){
//            $this->permission::create([
//                'name' => $value,
//                'display_name' => $value,
//                'parent_id' => $permission->id,
//                'key_code' => $permission->name.'_'.$value
//            ]);
//        }
    }
}
