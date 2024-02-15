<?php

namespace App\domain\Category\Actions;

use App\domain\Category\Features\GetCategoryFeature;
use App\Models\Categories;

class GetListCate
{
    public function handle(Categories $categories){
        $data = $categories->all();
        return $data;
    }
}
