<?php

namespace App\domain\Posts\DTO;

class PostsDTO
{
    private string $title;
    private string $description;
    private string $content;
    private string $thumbnail;
    private string $slug;
    private int $cate_id;
    private int $id;

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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getCateId(): int
    {
        return $this->cate_id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
