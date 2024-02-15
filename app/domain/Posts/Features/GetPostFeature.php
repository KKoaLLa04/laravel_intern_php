<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\CheckUserIsAdminAction;
use App\domain\Posts\Actions\GetListAction;
use App\domain\Posts\DTO\ListPostDTO;
use App\Models\Posts;

class GetPostFeature
{
    public function __construct(
        protected GetListAction $getListAction,
        protected CheckUserIsAdminAction $checkUserIsAdminAction
    )
    {
    }

    public function handle(ListPostDTO $listPostDTO){
        $isAdmin = $this->checkUserIsAdminAction->handle($listPostDTO);
        $listPostDTO->setIsAdmin($isAdmin);
       $data = $this->getListAction->handle($listPostDTO);
        return $data;
    }
}
