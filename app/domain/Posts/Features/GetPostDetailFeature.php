<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\GetPostDetailAction;

class GetPostDetailFeature
{
    public function __construct(
        protected GetPostDetailAction $getPostDetailAction
    )
    {
    }

    public function handle(){
        return $this->getPostDetailAction->handle();
    }
}
