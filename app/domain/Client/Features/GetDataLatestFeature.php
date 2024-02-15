<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\GetDataLastestAction;
use App\domain\Client\DTO\HomeDTO;

class GetDataLatestFeature
{
    public function __construct(
        protected GetDataLastestAction $GetDataLastestAction
    )
    {
    }

    public function handle(): object{
        return $this->GetDataLastestAction->handle();
    }
}
