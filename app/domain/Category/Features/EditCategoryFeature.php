<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\EditCateAction;
use App\domain\Category\DTO\CategoryDTO;
use App\Models\Category;

class EditCategoryFeature
{
    public function __construct(
        protected EditCateAction $editCate,
    ){

    }

    public function handle(CategoryDTO $categoryDTO): void{
        $this->editCate->handle($categoryDTO);
    }
}
