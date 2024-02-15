<?php

namespace App\domain\Users\Features;

use App\domain\Users\Actions\EditUserAction;
use App\domain\Users\DTO\UserDTO;

class EditUserFeature
{
    public function __construct(
        protected EditUserAction $editUserAction
    )
    {
    }

    public function handle(UserDTO $userDTO){
        $this->editUserAction->handle($userDTO);
    }
}
