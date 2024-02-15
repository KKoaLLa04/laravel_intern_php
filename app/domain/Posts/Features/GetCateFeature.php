<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\GetCateAction;
use App\Models\Categories;

class GetCateFeature
{
    public function __construct(
        protected Categories $categories,
        protected GetCateAction $getCateAction,
    )
    {

    }

    public function handle(){
        return $this->getCateAction->handle($this->categories);
    }
}
