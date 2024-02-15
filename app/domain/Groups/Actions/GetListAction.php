<?php

namespace App\domain\Groups\Actions;

use App\Models\Groups;

class GetListAction
{
    public function handle(Groups $groups){
        $data = $groups->all();
        return $data;
    }
}
