<?php

namespace App\domain\Category\Actions;

use App\domain\Category\Features\GetCategoryFeature;
use App\Models\Category;

class GetListCate
{
    public function handle(Category $categories){
        $data = $categories->all();
        return $data;
    }
}
