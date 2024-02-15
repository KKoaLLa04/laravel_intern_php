<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\CommentAction;
use App\domain\Client\DTO\CommentDTO;

class CommentFeature
{
    public function __construct(
        protected CommentAction $commentAction,
    )
    {
    }

    public function handle(CommentDTO $commentDTO): void{
        $this->commentAction->handle($commentDTO);
    }
}
