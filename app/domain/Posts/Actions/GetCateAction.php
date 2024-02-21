<?php

namespace App\domain\Posts\Actions;

use App\Models\Category;

class GetCateAction
{
    public function __construct(
        protected Category $category,
    )
    {
    }

    public function handle(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->category->all();
    }
}
