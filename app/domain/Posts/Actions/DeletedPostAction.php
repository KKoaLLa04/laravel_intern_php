<?php

namespace App\domain\Posts\Actions;

use App\Models\Posts;

class DeletedPostAction
{
    public function __construct(
        protected Posts $posts
    )
    {
    }

    public function handle(): void
    {
        $this->posts::with(['category','users'])->onlyTrashed()->get();
    }
}
