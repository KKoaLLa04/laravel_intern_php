<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\DeletedPostAction;
use App\Models\Posts;

class DeletedPostFeature
{
    public function __construct(
        protected DeletedPostAction $deletedPostAction,
    )
    {
    }

    public function handle(){
        $data = $this->deletedPostAction->handle();
        return $data;
    }
}
