<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\EditCate;
use App\domain\Category\DTO\CategoryDTO;
use App\Models\Categories;

class EditCategoryFeature
{
    public function __construct(
        protected  Categories $categories,
        protected EditCate $editCate,
    ){

    }

    public function handle(CategoryDTO $categoryDTO, Categories $categories): void{
        $this->editCate->handle($categoryDTO, $categories);
    }
}
