<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;

class DeletePostAction
{
    public function handle($id,Posts $posts){
        $postDetail = $posts->find($id);
        if(!empty($postDetail)){
//            $path = 'uploads/posts/'.$postDetail->thumbnail;
//            if(file_exists($path)){
//                unlink($path);
//            }
            $posts->destroy($postDetail->id);
        }
    }
}
