<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\AddPostAction;
use App\domain\Posts\DTO\PostsDTO;
use App\Models\Post;

class PostsFeature
{
    public function __construct(
        protected AddPostAction $addPostAction
    )
    {
    }

    public function handle(PostsDTO $postsDTO): void{
        $this->addPostAction->handle($postsDTO);
    }
}
