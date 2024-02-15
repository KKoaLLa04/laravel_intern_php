<?php

namespace App\domain\Posts\DTO;

class PostsDTO
{
    private $title;
    private $description;
    private $content;
    private $thumbnail;
    private $slug;
    private $cate_id;
    private $id;

    public function fromRequest(\Illuminate\Http\Request $request): self
    {
        $this->id = $request->id;
        $this->title = $request->input('title');
        $this->slug = $request->input('slug');
        $this->description = $request->input('description');
        $this->content = $request->input('content');
        $this->thumbnail = $request->file('thumbnail');
        $this->cate_id = $request->input('cate_id');
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getThumbnail(){
        return $this->thumbnail;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function getCateId(){
        return $this->cate_id;
    }

    public function getId(){
        return $this->id;
    }
}
