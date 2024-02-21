<?php

namespace App\domain\Client\Actions;

use App\domain\Client\DTO\DetailDTO;
use App\Models\Post;

class GetDetailAction
{
    public function __construct(
        protected Post $posts
    )
    {
    }

    public function handle(DetailDTO $detailDTO): object{
        return $this->posts->where('slug', $detailDTO->getSlug())->first();
    }
}
