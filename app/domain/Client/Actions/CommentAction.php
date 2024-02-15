<?php

namespace App\domain\Client\Actions;

use App\domain\Client\DTO\CommentDTO;
use App\Models\Comment;

class CommentAction
{
    public function __construct(
        protected Comment $comment,
    )
    {
    }

    public function handle(CommentDTO $commentDTO){
        $this->comment->name = $commentDTO->getName();
        $this->comment->email = $commentDTO->getEmail();
        $this->comment->content = $commentDTO->getContent();
        $this->comment->parent_id = 0;
        $this->comment->post_id = $commentDTO->getPostId();
        $this->comment->user_id = null;
        $this->comment->save();

        //lưu cookie
        $commentInfo = [
            'name' => $commentDTO->getName(),
            'email' => $commentDTO ->getEmail(),
        ];
        setcookie('commentInfo', json_encode($commentInfo), time()+86400*365);
    }
}
