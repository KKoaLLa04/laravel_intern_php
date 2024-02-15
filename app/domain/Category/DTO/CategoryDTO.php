<?php

namespace App\domain\Category\DTO;

use Illuminate\Http\Request;

class CategoryDTO
{
    private $title;
    private $slug;
    private $id;

    public function fromRequest(Request $request){
        $this->id = $request->id;
        $this->title = $request->input('title');
        $this->slug = $request->input('slug');
        return $this;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function getId(){
        return $this->id;
    }

}
