<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\ForceDeleteAction;
use App\Models\Posts;

class ForceDeleteFeature
{
    public function __construct(
        protected Posts $posts,
        protected ForceDeleteAction $forceDeleteAction,
    )
    {
    }

    public function handle($id): void{
        $this->forceDeleteAction->handle($id, $this->posts);
    }
}
