@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Xác nhận email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                        Để hoàn thành công viec tao tai khoan, vui long vao email de xem huong dan kich hoat tai khoan cua ban. <br/>
                        Nếu bạn khong nhan duoc email:
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary p-2 m-0 align-baseline">Bấm vào đây de gui lai email</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
