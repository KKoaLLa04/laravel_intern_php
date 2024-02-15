<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\CategoryDTO;
use App\Models\Categories;

class EditCate
{
    public function handle(CategoryDTO $categoryDTO,Categories $categories){
        $cateDetail = $categories->find($categoryDTO->getId());
        $cateDetail->title = $categoryDTO->getTitle();
        $cateDetail->slug = $categoryDTO->getSlug();
        $cateDetail->save();
    }
}
