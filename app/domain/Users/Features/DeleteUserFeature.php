<?php

namespace App\domain\Users\Features;

use App\domain\Users\Actions\DeleteUserAction;
use App\domain\Users\DTO\UserDTO;

class DeleteUserFeature
{
    public function __construct(
        protected DeleteUserAction $deleteUserAction,
    )
    {
    }

    public function handle($id){
        $this->deleteUserAction->handle($id);
    }
}
