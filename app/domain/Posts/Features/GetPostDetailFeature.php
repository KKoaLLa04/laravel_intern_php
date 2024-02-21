<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\GetPostDetailAction;
use App\domain\Posts\DTO\PostDetailDTO;

class GetPostDetailFeature
{
    public function __construct(
        protected GetPostDetailAction $getPostDetailAction
    )
    {
    }

    public function handle(PostDetailDTO $postDetailDTO){
        return $this->getPostDetailAction->handle($postDetailDTO);
    }
}
