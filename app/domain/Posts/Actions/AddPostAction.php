<?php

namespace App\domain\Posts\Actions;


use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class AddPostAction
{
    public function handle(PostsDTO $postDTO, Posts $postsModel){
        $postsModel->title = $postDTO->getTitle();
        $postsModel->description = $postDTO->getDescription();
        $postsModel->content = $postDTO->getContent();
        $postsModel->slug = $postDTO->getSlug();
        $postsModel->cate_id = $postDTO->getCateId();
        $postsModel->user_id = Auth::user()->id;

        // xu ly hinh anh
        $thumbnail = $postDTO->getThumbnail();
        $thumbnailName = $thumbnail->getClientoriginalName();
        $thumbnailNameArr = explode('.', $thumbnailName);
        $thumbnailName = reset($thumbnailNameArr);
        $extension = end($thumbnailNameArr);
        $thumbnailNewName = time().'-'.$thumbnailName.'.'.$extension;
        $path = 'uploads/posts';
        $thumbnail->move($path, $thumbnailNewName);

        $postsModel->thumbnail = $thumbnailNewName;

        $postsModel->save();
    }
}
