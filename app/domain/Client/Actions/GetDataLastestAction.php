<?php

namespace App\domain\Client\Actions;


use App\Models\Posts;

class GetDataLastestAction
{
    public function __construct(
        protected Posts $posts
    )
    {
    }

    public function handle(): object{
        return $this->posts->orderBy('created_at', 'DESC')->limit(6)->get();
    }
}
