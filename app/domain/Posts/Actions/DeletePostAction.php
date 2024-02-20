<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;

class DeletePostAction
{
    public function __construct(
        protected Posts $posts,
    )
    {
    }

    public function handle($id): void
    {
        $postDetail = $this->posts->find($id);
        if(!empty($postDetail)){
//            $path = 'uploads/posts/'.$postDetail->thumbnail;
//            if(file_exists($path)){
//                unlink($path);
//            }
            $this->posts->destroy($postDetail->id);
        }
    }
}
