<?php

namespace App\domain\Posts\Features;


use App\domain\Posts\Actions\EditPostAction;
use App\domain\Posts\DTO\PostsDTO;
use App\Models\Posts;

class EditPostFeature
{
    public function __construct(
        protected EditPostAction $editPostAction
    )
    {
    }

    public function handle(PostsDTO $postsDTO): void{
        $this->editPostAction->handle($postsDTO);
    }
}
