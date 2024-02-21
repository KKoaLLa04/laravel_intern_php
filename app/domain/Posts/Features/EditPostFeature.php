<?php

namespace App\domain\Posts\Features;


use App\domain\Posts\Actions\EditPostAction;
use App\domain\Posts\DTO\PostsDTO;

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
