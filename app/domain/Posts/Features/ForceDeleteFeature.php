<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\ForceDeleteAction;
use App\domain\Posts\DTO\DeleteDTO;

class ForceDeleteFeature
{
    public function __construct(
        protected ForceDeleteAction $forceDeleteAction,
    )
    {
    }

    public function handle(DeleteDTO $deleteDTO): void{
        $this->forceDeleteAction->handle($deleteDTO);
    }
}
