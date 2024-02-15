<?php

namespace App\domain\Posts\Actions;

use App\domain\Posts\DTO\AuthIdDTOInterface;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;

class CheckUserIsAdminAction
{
    public function __construct(
        protected UserRole $userRole
    )
    {
    }

    public function handle(AuthIdDTOInterface $authIdDTO): bool{
        $isAdmin = $this->userRole->where('user_id', $authIdDTO->getAuthId())->where('role_id',1)->exists();
        return $isAdmin;
    }
}
