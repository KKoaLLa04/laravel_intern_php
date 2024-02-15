@extends('backend.layout')

@section('content')
    <h1>Cập nhật người dùng</h1>
    <a href="{{route('admin.users.homeController')}}" class="btn btn-success">Quay lại</a>
    <hr>
    <form action="{{route('admin.users.post_edit', $userDetail)}}" method="POST">
        @csrf
        @if(!empty($errors->any()))
            <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
        @endif

        @if(!empty(session('msg')))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Họ tên</label>
                    <input type="text" class="form-control" placeholder="Họ tên...." name="name" value="{{old('name') ?? $userDetail->name}}">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" class="form-control" placeholder="Tên đăng nhập...." name="username" value="{{old('username') ?? $userDetail->username}}">
                    @error('username')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu...." name="password" value="{{old('password')}}">
                    @error('password')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Email người dùng...." name="email" value="{{old('email') ?? $userDetail->email}}">
                    @error('email')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Nhóm người dùng</label>

                    <div class="row">
                        @if(!empty($roles))
                            @foreach($roles as $key => $role)
                                <div class="col-3">
                                    <input type="checkbox" name="roles[]" id="group_{{$role->name}}" {{ $rolesOfUser->contains('id', $role->id)?'checked':false }} value="{{$role->id}}"/> <label for="group_{{$role->name}}" >{{$role->name}}</label>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @error('group_id')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <button class="btn btn-primary mb-3" type="submit">Cập nhật</button>
        </div>
    </form>
@endsection
