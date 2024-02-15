<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\ReplyCommentAction;
use App\domain\Client\DTO\CommentDTO;

class ReplyCommentFeature
{
    public function __construct(
        protected ReplyCommentAction $replyCommentAction
    )
    {
    }

    public function handle(CommentDTO $commentDTO): void{
        $this->replyCommentAction->handle($commentDTO);
    }
}
