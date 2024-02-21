<?php

namespace App\domain\Posts\Actions;

use App\Models\Post;

class DeletedPostAction
{
    public function __construct(
        protected Post $posts
    )
    {
    }

    public function handle()
    {
        return $this->posts::with(['category','users'])->onlyTrashed()->get();

    }
}
