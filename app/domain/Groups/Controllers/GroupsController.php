<?php

namespace App\domain\Groups\Controllers;

use App\domain\Groups\Features\AddGroupFeature;
use App\domain\Groups\Features\AddPermissionFeature;
use App\domain\Groups\Features\AddRoleFeature;
use App\domain\Groups\Features\EditGroupFeature;
use App\domain\Groups\Features\GetListFeature;
use App\domain\Groups\Features\PermissionFeature;
use App\domain\Groups\Requests\GroupRequest;
use App\domain\Groups\Requests\PermissionRequest;
use App\domain\Groups\Requests\RoleRequest;
use App\Http\Controllers\Controller;
use App\Models\Groups;
use App\Models\Modules;
use App\Models\Permission;
use App\Models\permissionJson;
use App\Models\Role;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function __construct(
        protected GetListFeature $getListFeature,
        protected AddGroupFeature $addGroupFeature,
        protected EditGroupFeature $editGroupFeature,
        protected PermissionFeature $permissionFeature,
        protected AddRoleFeature $addRoleFeature,
        protected AddPermissionFeature $addPermissionFeature,
    )
    {
    }

    public function index(){
        $lists = $this->getListFeature->handle();
        return view('backend.groups.index', compact('lists'));
    }

    public function add(){
        return view('backend.groups.add');
    }

    public function post_add(GroupRequest $request){
        $data = $request->getDTO();
        $this->addGroupFeature->handle($data);

        return back()->with('msg','Thêm nhóm người dùng mới thành công');
    }

    public function edit($id){
        $groupDetail = $this->groups->find($id);
        return view('backend.groups.edit', compact('groupDetail'));
    }

    public function post_edit($id, GroupRequest $groupRequest){
        $data = $groupRequest->getDTO();
        $this->editGroupFeature->handle($data);

        return back()->with('msg','Cập nhật nhóm người dùng thành công');
    }

    public function permissions($id){
        $groupDetail = $this->groups::find($id);
//        fix cung tam thoi
        $modules = $this->modules->get();
        $allPermission = $this->permission->get();
        $allRole = $this->role::all();
        $permissionJson = $this->permissionJson::where('group_id', $groupDetail->id)->first();
        if(!empty($permissionJson)){
            $permissionArr = json_decode($permissionJson->permission, true);
        }else{
            $permissionArr = [];
        }

//        return view('backend.groups.permissions', compact('groupDetail', 'modules', 'ruleAllow', 'roleArr'));
        return view('backend.groups.permissions', compact('groupDetail', 'modules', 'allPermission', 'allRole', 'permissionArr'));
    }

    public function permissions_post(Request $request){
        $this->permissionFeature->handle();
        return back()->with('msg','Phân quyền nhóm người dùng thành công');
    }

    public function addPermission(){
//      ***********  lam tam thoi
        $allRole = Role::all();
        $allModules = Modules::orderBy('id','DESC')->get();
        return view('backend.groups.addper', compact('allRole', 'allModules'));
    }

    public function addPermissionPost(PermissionRequest $permissionRequest){
        $data = $permissionRequest->getDTO();
        $this->addPermissionFeature->handle($data);

        return back()->with('msg','Phân quyền cho chức năng thành công');
    }

    public function addRole(){
        return view('backend.groups.addrole');
    }

    public function addRolePost(RoleRequest $roleRequest){
        $data = $roleRequest->getDTO();
        $this->addRoleFeature->handle($data);

        return back()->with('msg','Thêm quyền hạn mới thành công');
    }
}
