<?php

namespace App\domain\Category\DTO;

use Illuminate\Http\Request;

class DeleteDTO
{
    private int $id;

    public function fromRequest(Request $request): self{
        if(!empty($request->get('id'))){
            $this->id = $request->get('id');
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
