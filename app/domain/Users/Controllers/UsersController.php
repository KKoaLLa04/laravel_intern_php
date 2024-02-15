<?php

namespace App\domain\Users\Controllers;

use App\domain\Users\Features\GetListFeature;
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
    )
    {
    }

    public function index(){
        $listUser = $this->getListFeature->handle();
        return view('backend.users.index', compact('listUser'));
    }

    public function add(){
        $roles = Role::all();
        return view('backend.users.add', compact('roles'));
    }

    public function post_add(UserRequest $request){
        $user = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $user->roles()->attach($request->roles);

        return back()->with('msg','Thêm người dùng thành công');
    }

    public function edit($id){
        $roles = Role::all();
        $userDetail = $this->user->find($id);
        $rolesOfUser = $userDetail->roles;
        return view('backend.users.edit', compact('userDetail', 'roles', 'rolesOfUser'));
    }

    public function post_edit(EditUserRequest $request, $id){
        $user = $this->user->find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $user = $this->user->find($id);
        $user->roles()->sync($request->roles);

        return back()->with('msg','Cập nhật người dùng thành công');
    }
}
