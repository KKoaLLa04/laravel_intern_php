<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\CategoryDTO;
use App\Models\Categories;

class AddCate
{
    public function __construct(
        protected Categories $categories
    )
    {
    }

    public function handle(CategoryDTO $categoryDTO){
        $this->categories->title = $categoryDTO->getTitle();
        $this->categories->slug = $categoryDTO->getSlug();
        $this->categories->save();
    }
}
