<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\GetChildrenCommentAction;
use App\domain\Client\DTO\DetailDTO;

class GetChildrenCommentFeature
{
    public function __construct(
        protected GetChildrenCommentAction $getChildrenCommentAction
    )
    {
    }

    public function handle(DetailDTO $detailDTO){
        return $this->getChildrenCommentAction->handle($detailDTO);
    }
}
