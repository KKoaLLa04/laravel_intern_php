<?php

namespace App\domain\Users\Actions;

use App\domain\Users\DTO\UserDTO;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddUserAction
{

    public function __construct(
        protected User $user,
        protected RoleUser $roleUser,
    )
    {
    }

    public function handle(UserDTO $userDTO){
        $user = User::create([
            'name' => $userDTO->getName(),
            'email' => $userDTO->getEmail(),
            'username' => $userDTO->getUsername(),
            'password' => Hash::make($userDTO->getPassword()),
            'group_id' => $userDTO->getGroup(),
        ]);

        if(!empty($userDTO->getGroup())){
            foreach($userDTO->getGroup() as $key => $group){
                RoleUser::create([
                    'group_id' => $group,
                    'user_id' => $user->id,
                ]);
            }
        }

    }
}
