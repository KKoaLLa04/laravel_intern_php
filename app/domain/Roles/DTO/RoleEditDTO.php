<?php

namespace App\domain\Roles\DTO;

class RoleEditDTO
{
    private int $id;

    public function fromRequest(){

    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
}
