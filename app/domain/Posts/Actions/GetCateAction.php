<?php

namespace App\domain\Posts\Actions;

use App\Models\Category;

class GetCateAction
{
    public function handle(Category $categories){
        return $categories->all();
    }
}
