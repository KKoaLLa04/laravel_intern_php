<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\RestorePostAction;
use App\domain\Posts\DTO\DeleteDTO;

class RestorePostFeature
{
    public function __construct(
        protected RestorePostAction $restorePostAction,
    )
    {
    }

    public function handle(DeleteDTO $deleteDTO): void{
        $this->restorePostAction->handle($deleteDTO);
    }
}
