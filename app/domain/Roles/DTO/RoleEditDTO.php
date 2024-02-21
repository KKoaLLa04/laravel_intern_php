<?php

namespace App\domain\Roles\DTO;

class RoleEditDTO
{
    private int $id;

    public function fromRequest(\Illuminate\Http\Request $request): self{
        if(!empty($request->id)){
            $this->id = $request->id;
        }

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
