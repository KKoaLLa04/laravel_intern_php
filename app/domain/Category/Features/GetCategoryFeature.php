<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\GetListCate;
use App\domain\Posts\Actions\GetListAction;
use App\Models\Category;

class GetCategoryFeature
{
    public function __construct(
        protected  GetListCate $getListCate,
    )
    {
    }

    public function handle(Category $categories){
        $data = $this->getListCate->handle($categories);
        return $data;
    }
}
