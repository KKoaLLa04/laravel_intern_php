@extends('backend.layout')

@section('content')
    <h1>Thêm quyền hạn mới website</h1>
    <a href="{{route('admin.groups.homeController')}}" class="btn btn-success">Quay lại</a>
    <hr>
    @if(!empty($errors->any()))
        <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
    @endif

    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <form action="{{route('admin.groups.post_add_role')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Tên quyền</label>
                    <input type="text" class="form-control" placeholder="Quyền module của website...." name="name" value="{{old('name')}}">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Tiêu đề quyền</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề quyền module của website...." name="title" value="{{old('title')}}">
                    @error('title')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit">Thêm mới</button>
        </div>
    </form>
@endsection
