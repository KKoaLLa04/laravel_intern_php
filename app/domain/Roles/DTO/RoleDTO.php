<?php

namespace App\domain\Roles\DTO;


class RoleDTO
{
    private string $name;
    private string $display_name;
    private array $permission_id;
    private int $id;

    public function fromRequest(\Illuminate\Http\Request $request): self{
        $this->name = $request->input('name');
        $this->display_name = $request->input('display_name');

        if(!empty($request->permission_id)){
            $this->permission_id = $request->input('permission_id');
        }
        if(!empty($request->id)){
            $this->id = $request->id;
        }
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDisplayName(): string
    {
        return $this->display_name;
    }

    public function getPermissionId(): array
    {
        return $this->permission_id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
