<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\AddPostAction;
use App\domain\Posts\DTO\PostsDTO;
use App\Models\Post;

class AddPostFeature
{
    public function __construct(
        protected Post $posts,
        protected AddPostAction $addPostAction,
    ){

    }

    public function handle(PostsDTO $postsDTO): void{
        $this->addPostAction->handle($postsDTO);
    }
}
