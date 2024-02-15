<?php

namespace App\domain\Users\Actions;

use App\domain\Users\DTO\UserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class DeleteUserAction
{
    public function __construct(
        protected UserDTO $userDTO,
        protected User $user
    )
    {
    }

    public function handle($id){
        $user = $this->user->find($id);
        if(!empty($user)){
            $this->user->where('id', $id)->delete();
        }else{
            Session::flash('error','Lien ket khong ton tai hoac nguoi dung da bi xoa');
        }
    }
}
