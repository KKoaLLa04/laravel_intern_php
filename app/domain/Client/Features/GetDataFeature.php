<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\GetDataAction;

class GetDataFeature
{
    public function __construct(
        protected GetDataAction $getDataAction
    ){

    }

    public function handle(): object{
        return $this->getDataAction->handle();
    }
}
