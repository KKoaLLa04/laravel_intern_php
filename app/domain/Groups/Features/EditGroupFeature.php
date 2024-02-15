<?php

namespace App\domain\Groups\Features;

use App\domain\Groups\Actions\EditGroupAction;
use App\domain\Groups\DTO\GroupDTO;

class EditGroupFeature
{
    public function __construct(
        protected EditGroupAction $editGroupAction,
    )
    {
    }

    public function handle(GroupDTO $groupDTO){
        $this->editGroupAction->handle($groupDTO);
    }
}
