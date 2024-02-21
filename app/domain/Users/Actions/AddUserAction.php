<?php

namespace App\domain\Users\Actions;

use App\domain\Users\DTO\UserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddUserAction
{

    public function __construct(
        protected User $user,
    )
    {
    }

    public function handle(UserDTO $userDTO): void
    {
        $user = $this->user::create([
            'name' => $userDTO->getName(),
            'email' => $userDTO->getEmail(),
            'username' => $userDTO->getUsername(),
            'password' => Hash::make($userDTO->getPassword()),
//            'group_id' => $userDTO->getGroup(),
        ]);

        $user->roles()->attach($userDTO->getRole());
    }
}
