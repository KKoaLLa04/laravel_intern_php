<?php

namespace App\domain\Roles\Features;

use App\domain\Roles\Actions\PerMissionAddAction;
use App\domain\Roles\DTO\RoleDTO;

class PerMissionAddFeature
{
    public function __construct(
        protected PerMissionAddAction $perMissionAddAction
    )
    {
    }

    public function handle(RoleDTO $roleDTO): void
    {
        $this->perMissionAddAction->handle($roleDTO);
    }
}
