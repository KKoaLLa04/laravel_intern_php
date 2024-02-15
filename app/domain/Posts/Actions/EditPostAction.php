<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;

class EditPostAction
{
    public function handle(PostsDTO $postsDTO,Posts $posts){
        $postDetail = $posts->find($postsDTO->getId());
        if(!empty($postDetail)){
            $postDetail->title = $postsDTO->getTitle();
            $postDetail->description = $postsDTO->getDescription();
            $postDetail->content = $postsDTO->getContent();
            $postDetail->slug = $postsDTO->getSlug();
            $postDetail->cate_id = $postsDTO->getCateId();
            $postDetail->user_id = 1;

            // xu ly hinh anh
            if(!empty($postsDTO->getThumbnail())){
                $path = 'uploads/posts/'.$postDetail->thumbnail;
                if(file_exists($path)){
                    unlink($path);
                }

                $thumbnail = $postsDTO->getThumbnail();
                $thumbnailName = $thumbnail->getClientoriginalName();
                $thumbnailNameArr = explode('.', $thumbnailName);
                $thumbnailName = reset($thumbnailNameArr);
                $extension = end($thumbnailNameArr);
                $thumbnailNewName = time().'-'.$thumbnailName.'.'.$extension;
                $path = 'uploads/posts';
                $thumbnail->move($path, $thumbnailNewName);

                $postDetail->thumbnail = $thumbnailNewName;
            }

            $postDetail->save();
        }
    }
}
