<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\RestorePostAction;
use App\Models\Posts;

class RestorePostFeature
{
    public function __construct(
        protected Posts $posts,
        protected RestorePostAction $restorePostAction,
    )
    {
    }

    public function handle($id): void{
        $this->restorePostAction->handle($id, $this->posts);
    }
}
