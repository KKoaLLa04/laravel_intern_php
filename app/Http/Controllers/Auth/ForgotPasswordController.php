<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    protected function validateEmail(Request $request)
    {
        $request->validate(
            ['email' => 'required|email'],
            [
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng'
            ]
        );
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $request->wantsJson()
            ? new JsonResponse(['message' => 'Vui lòng kiểm tra email để thay đổi mật khẩu mới'], 200)
            : back()->with('status', 'Vui lòng kiểm tra email để thay đổi mật khẩu mới');
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'email' => ['Chúng tôi không tìm thấy email của bạn'],
            ]);
        }

        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Chúng tôi không tìm thấy email của bạn']);
    }
}
