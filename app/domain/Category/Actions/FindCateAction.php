<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\FindCateDTO;
use App\Models\Category;

class FindCateAction
{
    public function __construct(
        protected Category $category
    )
    {
    }

    public function handle(FindCateDTO $findCateDTO){
        return $this->category->find($findCateDTO->getId());
    }
}
