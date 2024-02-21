<?php

namespace App\domain\Category\Actions;

use App\domain\Category\Features\GetCategoryFeature;
use App\Models\Category;

class GetListCateAction
{
    public function __construct(
        protected Category $category,
    )
    {
    }

    public function handle( ): \Illuminate\Database\Eloquent\Collection
    {
        $data = $this->category->all();
        return $data;
    }
}
