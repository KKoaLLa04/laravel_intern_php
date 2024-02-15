<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\AddCate;
use App\domain\Category\DTO\CategoryDTO;

class AddCategoryFeature
{
    public function __construct(
        protected AddCate $addCate
    ){

    }

    public function handle(CategoryDTO $categoryDTO): void{
        $this->addCate->handle($categoryDTO);
    }
}
