<?php

namespace App\domain\Category\DTO;

use Illuminate\Http\Request;

class FindCateDTO
{
    private $id;

    public function fromRequest(Request $request): self{
        $this->id = $request->id;
        return $this;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
