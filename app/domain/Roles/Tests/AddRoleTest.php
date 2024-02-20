<?php

namespace App\domain\Roles\Tests;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;

it('only allows authorized roles to access add roles', function () {
    $authorizedUser = User::factory()->create();
    $role = Role::factory()->create(['name' => 'admin']);
    $permission = Permission::factory()->create(['key_code' => 'permission_add', 'name'=>'add']);

    $userRole = UserRole::create(['user_id' => $authorizedUser->id, 'role_id' => $role->id]);
    $permissionRole = PermissionRole::create(['role_id' => $role->id, 'permission_id' => $permission->id]);

    $this->be($authorizedUser);

    // Thực hiện kiểm thử
    $response = $this->get('/admin/roles/add');

    $response->assertStatus(200);

    $this->assertDatabaseHas('user_roles', [
        'user_id' => $authorizedUser->id,
        'role_id' => $role->id
    ]);
});

it('not allows authorized roles to access add roles', function () {
    $authorizedUser = User::factory()->create();
    $role = Role::factory()->create(['name' => 'admin']);
    $permission = Permission::factory()->create();

    $userRole = UserRole::create(['user_id' => $authorizedUser->id, 'role_id' => $role->id]);
    $permissionRole = PermissionRole::create(['role_id' => $role->id, 'permission_id' => $permission->id]);

    $this->be($authorizedUser);

    // Thực hiện kiểm thử
    $response = $this->get('/admin/roles/add');

    $response->assertStatus(403);

    $this->assertDatabaseMissing('user_roles', [
        'user_id' => $authorizedUser->id,
        'role_id' => $role->id
    ]);
});
