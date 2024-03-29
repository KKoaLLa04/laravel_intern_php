<?php

namespace App\domain\Users\Actions;

use App\domain\Users\DTO\UserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditUserAction
{
    public function __construct(
        protected User $user,
    )
    {
    }

    public function handle(UserDTO $userDTO): void
    {
//        $user = $this->user->find($userDTO->getId());
//        $user->name = $userDTO->getName();
//        $user->email = $userDTO->getEmail();
//        $user->username = $userDTO->getUsername();
//        $user->group_id = $userDTO->getGroupId();
//        if(!empty($userDTO->getPassword())){
//            $user->password = Hash::make($userDTO->getPassword());
//        }
//        $user->save();

        $user = $this->user->find($userDTO->getId())->update([
            'name' => $userDTO->getName(),
            'email' => $userDTO->getEmail(),
            'username' => $userDTO->getUsername(),
            'password' => Hash::make($userDTO->getPassword())
        ]);

        $user = $this->user->find($userDTO->getId());
        $user->roles()->sync($userDTO->getRole());
    }
}
