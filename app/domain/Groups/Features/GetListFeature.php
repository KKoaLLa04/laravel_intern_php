<?php

namespace App\domain\Groups\Features;

use App\domain\Groups\Actions\GetListAction;
use App\Models\Groups;

class GetListFeature
{
    public function __construct(
        protected Groups $groups,
        protected GetListAction $getListAction,
    )
    {
    }

    public function handle(){
        $data = $this->getListAction->handle($this->groups);
        return $data;
    }
}
