<?php

namespace App\domain\Posts\DTO;

interface AuthIdDTOInterface
{
    public function setAuthId(int $authId):void;

    public function getAuthId():int;
}
