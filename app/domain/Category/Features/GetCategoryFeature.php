<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\GetListCate;
use App\domain\Posts\Actions\GetListAction;

class GetCategoryFeature
{
    public function __construct(
        protected  GetListCate $getListCate,
    )
    {
    }

    public function handle(): \Illuminate\Database\Eloquent\Collection
    {
        $data = $this->getListCate->handle();
        return $data;
    }
}
