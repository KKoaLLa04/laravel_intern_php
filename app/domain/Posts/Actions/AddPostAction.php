<?php

namespace App\domain\Posts\Actions;


use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class AddPostAction
{
    public function __construct(
        protected Posts $posts,
    )
    {
    }

    public function handle(PostsDTO $postDTO): void
    {
        $this->posts->title = $postDTO->getTitle();
        $this->posts->description = $postDTO->getDescription();
        $this->posts->content = $postDTO->getContent();
        $this->posts->slug = $postDTO->getSlug();
        $this->posts->cate_id = $postDTO->getCateId();
        $this->posts->user_id = Auth::user()->id;

        // xu ly hinh anh
        $thumbnail = $postDTO->getThumbnail();
        $thumbnailName = $thumbnail->getClientoriginalName();
        $thumbnailNameArr = explode('.', $thumbnailName);
        $thumbnailName = reset($thumbnailNameArr);
        $extension = end($thumbnailNameArr);
        $thumbnailNewName = time().'-'.$thumbnailName.'.'.$extension;
        $path = 'uploads/posts';
        $thumbnail->move($path, $thumbnailNewName);

        $this->posts->thumbnail = $thumbnailNewName;

        $this->posts->save();
    }
}
