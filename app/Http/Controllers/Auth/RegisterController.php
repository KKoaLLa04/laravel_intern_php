<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'min:5', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'min:8', 'same:password'],
        ],
        [
            'required' => ':attribute không được để trống',
            'string' => ':attribute phải là chữ',
            'max' => ':attribute khong duoc lon hon :max ky tu',
            'min' => ':attribute khong duoc nho hon :min ky tu',
            'email' => ':attribute khong dung dinh dang',
            'unique' => ':attribute đã được sử dụng',
            'same' => ':attribute khong trung khop',
        ],
        [
            'name' => 'Họ và tên',
            'email' => 'Địa chi email',
            'password' => 'Mat khau',
            'username' => 'Tên đăng nhập',
            'password_confirmation' => 'Xac nhan mat khau'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath())->with('msg','Đăng ký tài khoản thành công, Vui lòng vào email để kích hoạt tài khoản');
    }
}
