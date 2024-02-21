<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\GetCateAction;
use App\Models\Category;

class GetCateFeature
{
    public function __construct(
        protected GetCateAction $getCateAction,
    )
    {

    }

    public function handle(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->getCateAction->handle();
    }
}
