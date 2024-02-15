<?php

namespace App\domain\Posts\DTO;

use Illuminate\Support\Facades\Auth;

class ListPostDTO implements AuthIdDTOInterface
{
    private int $userId;
    private bool $isAdmin;

    public function fromRequest(): self
    {
        $this->setAuthId(Auth::id());
        return $this;
    }

    public function setAuthId(int $authId): void
    {
        $this->userId = $authId;
    }

    public function getAuthId(): int
    {
        return $this->userId;
    }

    public function setIsAdmin(bool $isAdmin): void{
        $this->isAdmin = $isAdmin;
    }

    public function getIsAdmin(): bool{
        return $this->isAdmin;
    }
}
