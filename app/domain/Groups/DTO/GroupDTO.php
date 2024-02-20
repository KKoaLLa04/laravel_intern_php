<?php

namespace App\domain\Groups\DTO;

class GroupDTO
{
    private string $name;
    private string $permissions;
    private int $id;
    public function fromRequest(\Illuminate\Http\Request $request): self
    {
        if(!empty($request->id)){
            $this->id = $request->id;
        }
        $this->name = $request->input('name');
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPermissions(): string
    {
        return $this->permissions;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
