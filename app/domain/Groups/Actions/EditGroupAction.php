<?php

namespace App\domain\Groups\Actions;

use App\domain\Groups\DTO\GroupDTO;
use App\Models\Groups;

class EditGroupAction
{

    public function handle(GroupDTO $groupDTO){
        $id = $groupDTO->getId();

        $groupDetail = Groups::find($id);
        $groupDetail->name = $groupDTO->getName();

        $groupDetail->save();
    }
}
