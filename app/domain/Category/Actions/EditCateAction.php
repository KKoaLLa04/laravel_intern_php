<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\CategoryDTO;
use App\Models\Category;

class EditCateAction
{
    public function __construct(
        protected Category $category,
    )
    {
    }

    public function handle(CategoryDTO $categoryDTO): void
    {

        $cateDetail = $this->category->find($categoryDTO->getId());
        $cateDetail->title = $categoryDTO->getTitle();
        $cateDetail->slug = $categoryDTO->getSlug();
        $cateDetail->save();
    }
}
