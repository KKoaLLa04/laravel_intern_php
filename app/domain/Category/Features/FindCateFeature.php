<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\FindCateAction;
use App\domain\Category\DTO\FindCateDTO;

class FindCateFeature
{
    public function __construct(
        protected FindCateAction $findCateAction
    )
    {
    }

    public function handle(FindCateDTO $findCateDTO){
        return $this->findCateAction->handle($findCateDTO);
    }
}
