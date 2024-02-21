<?php

namespace App\domain\Users\Actions;

use App\domain\Users\DTO\UserDTO;
use App\Models\User;

class GetUserDetailAction
{
    public function __construct()
    {
    }

    public function handle(UserDTO $userDTO){
        return User::find($userDTO->getId());
    }
}
