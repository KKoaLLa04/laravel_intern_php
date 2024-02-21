<?php

namespace App\domain\Users\Features;

use App\domain\Users\Actions\AddUserAction;
use App\domain\Users\DTO\UserDTO;
use App\Models\User;

class AddUserFeature
{
    public function __construct(
        protected AddUserAction $addUserAction
    ){

    }

    public function handle(UserDTO $userDTO): void{
        $this->addUserAction->handle($userDTO);
    }
}
