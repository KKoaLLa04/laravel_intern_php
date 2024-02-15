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

    public function getName(){
        return $this->name;
    }

    public function getPermissions(){
        return $this->permissions;
    }

    public function getId(){
        return $this->id;
    }
}
