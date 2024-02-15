<?php

namespace App\domain\Client\Actions;

use App\domain\Client\DTO\DetailDTO;
use App\Models\Comment;
use App\Models\Posts;

class GetChildrenCommentAction
{
    public function __construct(
        protected Comment $comment,
        protected Posts $posts
    )
    {
    }

    public function handle(DetailDTO $detailDTO){
        $postDetail = $this->posts->where('slug', $detailDTO->getSlug())->first();
        return $this->comment::orderBy('created_at', 'ASC')->where('post_id', $postDetail->id)->where('parent_id','<>',0)->get();
    }
}
