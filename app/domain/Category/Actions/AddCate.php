<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\CategoryDTO;
use App\Models\Category;

class AddCate
{
    public function __construct(
        protected Category $category
    )
    {
    }

    public function handle(CategoryDTO $categoryDTO): void
    {
        $this->category->title = $categoryDTO->getTitle();
        $this->category->slug = $categoryDTO->getSlug();
        $this->category->save();
    }
}
