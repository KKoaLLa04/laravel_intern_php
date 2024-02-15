<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/category';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ],
        [
            'required' => ':attribute khong duoc de trong',
            'string' => ':attribute phai la ky tu',
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => ['Thong tin dang nhap khong chinh xac'],
        ]);
    }

    public function username(){
        return 'username';
    }

    protected function credentials(Request $request)
    {
        if(filter_var($request->username, FILTER_VALIDATE_EMAIL)){
            $fieldDb = 'email';
        }else{
            $fieldDb = 'username';
        }
        $dataArr = [
            $fieldDb => $request->username,
            'password' => $request->password,
        ];

        return $dataArr;
    }
}
