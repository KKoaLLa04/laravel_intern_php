<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\DeleteDTO;
use App\domain\Posts\DTO\PostsDTO;
use App\Models\Post;

class DeletePostAction
{
    public function __construct(
        protected Post $posts,
    )
    {
    }

    public function handle(DeleteDTO $deleteDTO): void
    {
        $postDetail = $this->posts->find($deleteDTO->getId());
        if(!empty($postDetail)){
//            $path = 'uploads/posts/'.$postDetail->thumbnail;
//            if(file_exists($path)){
//                unlink($path);
//            }
            $this->posts->destroy($postDetail->id);
        }
    }
}
