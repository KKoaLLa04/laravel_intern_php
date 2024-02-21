<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\DeletePostAction;
use App\domain\Posts\DTO\DeleteDTO;

class DeletePostFeature
{
    public function __construct(
        protected DeletePostAction $deletePostAction
    )
    {
    }

    public function handle(DeleteDTO $deleteDTO): void{
        $this->deletePostAction->handle($deleteDTO);
    }
}
