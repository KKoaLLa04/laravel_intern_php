<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\DeletePostAction;
use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;

class DeletePostFeature
{
    public function __construct(
        protected Posts $posts,
        protected DeletePostAction $deletePostAction
    )
    {
    }

    public function handle($id): void{
        $this->deletePostAction->handle($id);
    }
}
