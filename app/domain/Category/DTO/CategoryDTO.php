<?php

namespace App\domain\Category\DTO;

use Illuminate\Http\Request;

class CategoryDTO
{
    private string $title;
    private string $slug;
    private int $id;

    public function fromRequest(Request $request): static
    {
        if(!empty($request->input('id'))){
            $this->id = $request->input('id');
        }

        $this->title = $request->input('title');
        $this->slug = $request->input('slug');
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getId(): int
    {
        return $this->id;
    }

}
