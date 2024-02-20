<?php

namespace App\domain\Roles\DTO;

class RoleEditDTO
{
    private int $id;

    public function fromRequest(){

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
