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
        return Posts::all();
    }
}
