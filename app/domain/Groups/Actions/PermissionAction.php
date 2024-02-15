<?php

namespace App\domain\Groups\Actions;

use App\Models\Groups;
use App\Models\permissionJson;
use Illuminate\Http\Request;

class PermissionAction
{
    public function __construct(
        protected Request $request,
        protected Groups $groups,
        protected permissionJson $permissionJson,
    )
    {
    }

    public function handle(){
        if(!empty($this->request->rule)){
            $ruleArr = $this->request->rule;
        }else{
            $ruleArr = [];
        }
        $permissionJson = json_encode($ruleArr);

        $groupDetail = $this->groups::find($this->request->id);
        $permissionDetail = $this->permissionJson->where('group_id', $groupDetail->id)->first();
        if(!empty($permissionDetail)){
            $permissionDetail->permission = $permissionJson;
            $permissionDetail->group_id = $groupDetail->id;
            $permissionDetail->save();
        }else{
            $this->permissionJson->permission = $permissionJson;
            $this->permissionJson->group_id = $groupDetail->id;
            $this->permissionJson->save();
        }
    }
}
