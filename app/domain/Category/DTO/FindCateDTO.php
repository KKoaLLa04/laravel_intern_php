<?php

namespace App\domain\Category\DTO;

use Illuminate\Http\Request;

class FindCateDTO
{
    private int $id;

    public function fromRequest(Request $request): self{
        if(!empty($request->id)){
            $this->id = $request->id;
        }
        return $this;
    }

    public function getId(): int
    {
        if(!empty($this->id)){
            return $this->id;
        }

        return 0;
    }
}
