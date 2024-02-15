<?php

namespace App\domain\Client\Actions;

use App\Models\Posts;

class GetDataAction
{
    public function __construct(
        protected Posts $posts
    )
    {
    }

    public function handle(): object{
        return $this->posts::all();
    }
}
