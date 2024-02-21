<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\PostDetailDTO;
use App\Models\Post;

class GetPostDetailAction
{
    public function __construct(
        protected Post $post
    )
    {
    }

    public function handle(PostDetailDTO $postDetailDTO){
        return $this->post->where('id', $postDetailDTO->getId())->first();
    }
}
