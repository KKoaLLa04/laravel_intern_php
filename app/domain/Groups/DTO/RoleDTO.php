<?php

namespace App\domain\Groups\DTO;

use Illuminate\Http\Request;

class RoleDTO
{
    private string $name;
    private string $title;

    public function fromRequest(Request $request): self{
        $this->name = $request->input('name');
        $this->title = $request->input('title');
        return $this;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getTitle(): string{
        return $this->title;
    }
}
