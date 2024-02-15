<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\AddPostAction;
use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;

class PostsFeature
{
    public function __construct(
        protected AddPostAction $addPostAction
    )
    {
    }

    public function handle(PostsDTO $postsDTO, Posts $posts): void{
        $this->addPostAction->handle($postsDTO, $posts);
    }
}
