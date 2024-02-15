<?php

namespace App\domain\Groups\Features;

use App\domain\Groups\Actions\AddGroupAction;
use App\domain\Groups\DTO\GroupDTO;
use App\Models\Groups;

class AddGroupFeature
{
    public function __construct(
        protected Groups $groups,
        protected AddGroupAction $addGroupAction,
    )
    {
    }

    public function handle(GroupDTO $groupDTO): void{
        $this->addGroupAction->handle($groupDTO,$this->groups);
    }
}
