<?php

namespace App\domain\Groups\DTO;

use Illuminate\Http\Request;

class PermissionDTO
{
    private int $role_id;
    private int $module_id;

    public function fromRequest(Request $request): self{
        $this->role_id = $request->input('role_id');
        $this->module_id = $request->input('module_id');

        return $this;
    }

    public function getRoleId(): int{
        return $this->role_id;
    }

    public function getModuleId(): int{
        return $this->module_id;
    }
}
