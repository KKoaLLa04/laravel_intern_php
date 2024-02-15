<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\GetCommentAction;
use App\domain\Client\DTO\DetailDTO;

class GetCommentFeature
{
    public function __construct(
        protected GetCommentAction $getCommentAction
    )
    {
    }

    public function handle(DetailDTO $detailDTO){
        return $this->getCommentAction->handle($detailDTO);
    }
}
