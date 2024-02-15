@extends('backend.layout')

@section('content')
    <h1>Thêm nhom nguoi dung moi</h1>
    <a href="{{route('admin.groups.homeController')}}" class="btn btn-success">Quay lại</a>
    <hr>
    @if(!empty($errors->any()))
        <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
    @endif

    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <form action="{{route('admin.groups.post_add')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Tên nhóm người dùng</label>
                    <input type="text" class="form-control" placeholder="Ten nhom nguoi dung...." name="name" value="{{old('name')}}">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

            </div>

            <button class="btn btn-primary mb-3" type="submit">Thêm mới</button>
        </div>
    </form>
@endsection
