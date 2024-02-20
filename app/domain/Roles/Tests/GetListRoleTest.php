<?php

namespace App\domain\Roles\Tests;

//use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Foundation\Testing\WithFaker;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

//test('get list all roles when not permission test Error', function () {
//    $roles = Role::factory(['name' => 'Kiebd'])->createMany(10);
//    $permisison = Permission::factory(['name' => 'list']);
//    $userRole = UserRole::factory(['permission_id' => 1, 'role_id' => 1]);
//    $result = $this->get('admin/roles');
//    $result->assertStatus(200);
//});

//test('get list all roles when not has permission test', function () {
//    $user = Auth::user();
//    $role = Role::factory(['name' => 'Super Amin']);
//    UserRole::factory(['user_id' => 1, 'role_id' => 1]);
//    $result = $this->get('admin/roles');
//    $result->assertStatus(403);
//});
//test('add permission test', function () {
//    $permission = Permission::factory(['name' => 'add']);
//    $result = $this->get('admin/roles/permission_add');
//    $result->assertStatus(200);
//});
//
//test('get list paginate permission test', function () {
//
//});

//check list roles
it('only allows authorized roles to access list roles', function () {
    $authorizedUser = User::factory()->create();
    $role = Role::factory()->create(['name' => 'admin']);
    $permission = Permission::factory()->create(['key_code' => 'permission_list', 'name'=>'list']);

    $userRole = UserRole::create(['user_id' => $authorizedUser->id, 'role_id' => $role->id]);
    $permissionRole = PermissionRole::create(['role_id' => $role->id, 'permission_id' => $permission->id]);

    $this->be($authorizedUser);

    // Thực hiện kiểm thử
    $response = $this->get('/admin/roles');

    $response->assertStatus(200);

    $this->assertDatabaseHas('user_roles', [
        'user_id' => $authorizedUser->id,
        'role_id' => $role->id
    ]);
});

//check 403 roles
it('not allows authorized category to access list category', function () {
    $authorizedUser = User::factory()->create();
    $role = Role::factory()->create(['name' => 'admin']);
    $permission = Permission::factory()->create();

    $userRole = UserRole::create(['user_id' => $authorizedUser->id, 'role_id' => $role->id]);
    $permissionRole = PermissionRole::create(['role_id' => $role->id, 'permission_id' => $permission->id]);

    $this->be($authorizedUser);

    // Thực hiện kiểm thử
    $response = $this->get('/admin/roles');

    $response->assertStatus(403);

    $this->assertDatabaseMissing('user_roles', [
        'user_id' => $authorizedUser->id,
        'role_id' => $role->id
    ]);
});
