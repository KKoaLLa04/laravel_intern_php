<?php

namespace App\domain\Posts\Actions;

use App\Models\Categories;

class GetCateAction
{
    public function handle(Categories $categories){
        return $categories->all();
    }
}
