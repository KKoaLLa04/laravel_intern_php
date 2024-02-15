<?php

namespace App\domain\Roles\Tests;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;

it('only allows authorized roles to access edit roles', function () {
    $authorizedUser = User::factory()->create();
    $role = Role::factory()->create(['name' => 'admin']);
    $permission = Permission::factory()->create(['key_code' => 'permission_edit', 'name'=>'edit']);

    $userRole = UserRole::create(['user_id' => $authorizedUser->id, 'role_id' => $role->id]);
    $permissionRole = PermissionRole::create(['role_id' => $role->id, 'permission_id' => $permission->id]);

    $this->be($authorizedUser);

    // Thực hiện kiểm thử
    $response = $this->get('/admin/roles/edit/'.$role->id);

    $response->assertStatus(200);
});

it('not allows authorized roles to access edit roles', function () {
    $authorizedUser = User::factory()->create();
    $role = Role::factory()->create(['name' => 'admin']);
    $permission = Permission::factory()->create();

    $userRole = UserRole::create(['user_id' => $authorizedUser->id, 'role_id' => $role->id]);
    $permissionRole = PermissionRole::create(['role_id' => $role->id, 'permission_id' => $permission->id]);

    $this->be($authorizedUser);

    // Thực hiện kiểm thử
    $response = $this->get('/admin/roles/edit/'.$role->id);

    $response->assertStatus(403);
});
