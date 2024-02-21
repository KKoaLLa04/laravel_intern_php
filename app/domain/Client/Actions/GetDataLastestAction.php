<?php

namespace App\domain\Client\Actions;


use App\Models\Post;

class GetDataLastestAction
{
    public function __construct(
        protected Post $posts
    )
    {
    }

    public function handle(): object{
        return Post::all();
    }
}
