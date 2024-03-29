<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\ListPostDTO;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;

class GetListAction
{
    public function __construct(
        protected User $user,
        protected UserRole $userRole,
    )
    {
    }

    public function handle(ListPostDTO $listPostDTO){
        if($listPostDTO->getIsAdmin()){
            $data = Post::with(['category','users'])->get();
        }else{
            $data = Post::with(['category','users'])->where('user_id', $listPostDTO->getAuthId())->get();
        }

       return $data;
    }
}
