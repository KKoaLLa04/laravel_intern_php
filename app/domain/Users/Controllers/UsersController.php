<?php

namespace App\domain\Users\Controllers;

use App\domain\Users\Features\AddUserFeature;
use App\domain\Users\Features\EditUserFeature;
use App\domain\Users\Features\GetAllRoleFeature;
use App\domain\Users\Features\GetListFeature;
use App\domain\Users\Features\GetUserDetailFeature;
use App\domain\Users\Requests\EditGetUserRequest;
use App\domain\Users\Requests\EditUserRequest;
use App\domain\Users\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct(
        protected User $user,
        protected GetListFeature $getListFeature,
        protected AddUserFeature $addUserFeature,
        protected EditUserFeature $editUserFeature,
        protected GetAllRoleFeature $getAllRoleFeature,
        protected GetUserDetailFeature $getUserDetailFeature,
    )
    {
    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $listUser = $this->getListFeature->handle();
        return view('backend.users.index', compact('listUser'));
    }

    public function add(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $roles = $this->getAllRoleFeature->handle();
        return view('backend.users.add', compact('roles'));
    }

    public function post_add(UserRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->getDTO();
        $this->addUserFeature->handle($data);

        return back()->with('msg','Thêm người dùng thành công');
    }

    public function edit(EditGetUserRequest $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $roles = $this->getAllRoleFeature->handle();
        $data = $request->getDTO();
        $userDetail = $this->getUserDetailFeature->handle($data);
        $rolesOfUser = $userDetail->roles;
        return view('backend.users.edit', compact('userDetail', 'roles', 'rolesOfUser'));
    }

    public function post_edit(EditUserRequest $request): \Illuminate\Http\RedirectResponse
    {
       $data = $request->getDTO();
       $this->editUserFeature->handle($data);
        return back()->with('msg','Cập nhật người dùng thành công');
    }
}
