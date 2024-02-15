<?php

namespace App\domain\Groups\Actions;

use App\domain\Groups\DTO\GroupDTO;
use App\Models\Groups;

class AddGroupAction
{
    public function handle(GroupDTO $groupDTO ,Groups $groups){
        $groups->name = $groupDTO->getName();

        $groups->save();
    }
}
