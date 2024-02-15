<?php

namespace App\domain\Posts\Actions;

use App\Models\Posts;

class ForceDeleteAction
{
    public function handle($id, Posts $posts){
        if(!empty($id)){
            $postDetail = $posts->withTrashed()->where('id', $id)->forceDelete();
        }
    }
}
