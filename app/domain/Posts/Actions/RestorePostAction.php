<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\DeleteDTO;
use App\Models\Post;

class RestorePostAction
{
    public function __construct(
        protected Post $posts
    )
    {
    }

    public function handle(DeleteDTO $deleteDTO): void
    {
        if(!empty($deleteDTO->getId())){
            $this->posts->withTrashed()->where('id', $deleteDTO->getId())->restore();
        }
    }
}
