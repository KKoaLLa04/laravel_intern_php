<?php

namespace App\domain\Users\Features;

use App\domain\Users\Actions\GetListAction;
use App\Models\User;

class GetListFeature
{
    public function __construct(
        protected GetListAction $getListAction
    )
    {
    }

    public function handle(){
        return $this->getListAction->handle();
    }
}
