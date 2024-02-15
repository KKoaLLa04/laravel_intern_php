<?php

namespace App\domain\Roles\Controllers;

use App\domain\Roles\DTO\RoleDTO;
use App\domain\Roles\DTO\RoleEditDTO;
use App\domain\Roles\Features\GetAddRoleFeature;
use App\domain\Roles\Features\GetAllRoleFeature;
use App\domain\Roles\Features\GetDetailRoleFeature;
use App\domain\Roles\Features\GetParentRoleFeature;
use App\domain\Roles\Features\PostAddRoleFeature;
use App\domain\Roles\Features\PostEditRoleFeature;
use App\domain\Roles\Requests\PermissionRequest;
use App\domain\Roles\Requests\RoleRequest;
use App\domain\Roles\Requests\UpdateRoleRequest;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;

class RolesController extends Controller
{
    public function __construct(
        protected Role                 $roles,
        protected Permission           $permission,
        protected GetAllRoleFeature    $getAllRoleFeature,
        protected GetAddRoleFeature    $getAddRoleFeature,
        protected PostAddRoleFeature   $postAddRoleFeature,
        protected GetParentRoleFeature $getParentRoleFeature,
        protected GetDetailRoleFeature $getDetailRoleFeature,
        protected PostEditRoleFeature  $postEditRoleFeature,
    )
    {
    }

    public function index(){
        $listRole = $this->getAllRoleFeature->handle();
        return view('backend.roles.index', compact('listRole'));
    }

    public function add(){
        $permissionParent = $this->getAddRoleFeature->handle();
        return view('backend.roles.add', compact('permissionParent'));
    }

    public function post_add(RoleRequest $roleRequest){
        $data = $roleRequest->getDTO();
        $this->postAddRoleFeature->handle($data);

        return back()->with('msg','Thêm chức vụ mới thành công');
    }

    public function edit($id){
        $permissionParent = $this->getParentRoleFeature->handle();

        $roleEditDTO = new RoleEditDTO();
        $roleEditDTO->setId($id);
        $roleDetail = $this->getDetailRoleFeature->handle($roleEditDTO);

        $permissionChecked = $roleDetail->permissions;

        return view('backend.roles.edit', compact('permissionParent', 'roleDetail', 'permissionChecked'));
    }

    public function post_edit($id, UpdateRoleRequest $roleRequest){
        $data = $roleRequest->getDTO();
        $this->postEditRoleFeature->handle($data);
        return back()->with('msg','Cập nhật chức vụ thành công');
    }

    public function permission_add(){
        return view('backend.roles.permission_add');
    }

    public function permission_post_add(PermissionRequest $permissionRequest){
        $permission = Permission::create([
            'name' => $permissionRequest->module_parent,
            'display_name' => $permissionRequest->module_parent,
            'parent_id' => 0,
        ]);

            foreach($permissionRequest->module_children as $value){
                Permission::create([
                    'name' => $value,
                    'display_name' => $value,
                    'parent_id' => $permission->id,
                    'key_code' => $permission->name.'_'.$value
                ]);
            }
        return back()->with('msg','Thêm dữ liệu thành công');
    }
}
