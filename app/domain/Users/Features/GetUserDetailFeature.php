<?php

namespace App\domain\Users\Features;

use App\domain\Users\Actions\GetUserDetailAction;
use App\domain\Users\DTO\UserDTO;

class GetUserDetailFeature
{
    public function __construct(
        protected GetUserDetailAction $getUserDetailAction
    )
    {
    }

    public function handle(UserDTO $userDTO){
        return $this->getUserDetailAction->handle($userDTO);
    }
}
