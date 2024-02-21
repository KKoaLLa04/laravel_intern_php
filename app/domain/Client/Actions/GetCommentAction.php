<?php

namespace App\domain\Client\Actions;

use App\domain\Client\DTO\DetailDTO;
use App\Models\Comment;
use App\Models\Post;

class GetCommentAction
{
    public function __construct(
        protected Comment $comment,
        protected Post $posts
    )
    {
    }

    public function handle(DetailDTO $detailDTO){
        $postDetail = $this->posts->where('slug', $detailDTO->getSlug())->first();
        return $this->comment::orderBy('created_at', 'DESC')->where('post_id', $postDetail->id)->where('parent_id',0)->get();
    }
}
