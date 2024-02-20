<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\EditCate;
use App\domain\Category\DTO\CategoryDTO;
use App\Models\Category;

class EditCategoryFeature
{
    public function __construct(
        protected  Category $categories,
        protected EditCate  $editCate,
    ){

    }

    public function handle(CategoryDTO $categoryDTO, Category $categories): void{
        $this->editCate->handle($categoryDTO, $categories);
    }
}
