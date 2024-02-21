<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\GetDataLastestAction;

class GetDataLatestFeature
{
    public function __construct(
        protected GetDataLastestAction $getDataLastestAction,
    )
    {
    }

    public function handle(): object{
        return $this->getDataLastestAction->handle();
    }
}
