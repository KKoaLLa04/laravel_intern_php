<?php

namespace App\domain\Posts\Actions;

use App\Models\Posts;

class RestorePostAction
{
    public function __construct(
        protected Posts $posts
    )
    {
    }

    public function handle($id): void
    {
        if(!empty($id)){
            $this->posts->withTrashed()->where('id', $id)->restore();
        }
    }
}
