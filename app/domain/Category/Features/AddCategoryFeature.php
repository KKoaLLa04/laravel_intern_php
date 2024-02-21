<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\AddCateAction;
use App\domain\Category\DTO\CategoryDTO;

class AddCategoryFeature
{
    public function __construct(
        protected AddCateAction $addCate
    ){

    }

    public function handle(CategoryDTO $categoryDTO): void{
        $this->addCate->handle($categoryDTO);
    }
}
