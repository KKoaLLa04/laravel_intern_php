<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\CategoryDTO;
use App\Models\Category;

class EditCate
{
    public function __construct(
        protected Category $category,
    )
    {
    }

    public function handle(CategoryDTO $categoryDTO){

        $cateDetail = $this->category->find($categoryDTO->getId());
        $cateDetail->title = $categoryDTO->getTitle();
        $cateDetail->slug = $categoryDTO->getSlug();
        $cateDetail->save();
    }
}
