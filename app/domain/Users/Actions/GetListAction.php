<?php

namespace App\domain\Users\Actions;

use App\Models\User;

class GetListAction
{
    public function __construct(
        protected User $user,
    )
    {
    }

    public function handle(){
        return $this->user->get();
    }
}
