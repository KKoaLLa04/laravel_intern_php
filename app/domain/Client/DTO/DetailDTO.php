<?php

namespace App\domain\Client\DTO;

use Illuminate\Http\Request;

class DetailDTO
{
    private string $title;
    private string $description;
    private string $content;
    private string $thumbnail;
    private string $slug;
    private int $cate_id;
    private int $user_id;

    public function fromRequest(Request $request): self{
//        $this->title = $request->input('title');
//        $this->description = $request->input('description');
//        $this->content = $request->input('content');
//        $this->thumbnail = $request->input('thumbnail');
        $this->slug = $request->slug;
//        $this->cate_id = $request->input('cate_id');
//        $this->user_id = $request->input('user_id');

        return $this;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getDescription(): string{
        return $this->description;
    }

    public function getContent(): string{
        return $this->content;
    }

    public function getThumbnail(): string{
        return $this->getThumbnail();
    }

    public function getSlug(): string{
        return $this->slug;
    }

    public function getCateId(): int{
        return $this->cate_id;
    }

    public function getUserId(): int{
        return $this->user_id;
    }
}
