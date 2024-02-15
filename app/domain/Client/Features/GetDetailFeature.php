<?php

namespace App\domain\Client\Features;

use App\domain\Client\Actions\GetDetailAction;
use App\domain\Client\DTO\DetailDTO;

class GetDetailFeature
{
     public function __construct(
         protected GetDetailAction $getDetailAction,
     )
     {
     }

     public function handle(DetailDTO $detailDTO){
        return $this->getDetailAction->handle($detailDTO);
     }
}
