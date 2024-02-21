<?php

namespace App\domain\Client\Actions;

use App\Models\Post;

class GetDataAction
{
    public function __construct(
        protected Post $posts
    )
    {
    }

    public function handle(): object{
        return $this->posts::all();
    }
}
