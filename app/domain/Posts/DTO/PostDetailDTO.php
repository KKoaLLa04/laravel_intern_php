<?php

namespace App\domain\Posts\DTO;

class PostDetailDTO
{
    private int $id;
    public function fromRequest(\Illuminate\Http\Request $request): self
    {
        $this->id = $request->id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
