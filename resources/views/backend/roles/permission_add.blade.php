@extends('backend.layout')

@section('content')
    <h1>Thêm Quyền mới</h1>
    <a href="{{route('admin.roles.index')}}" class="btn btn-success">Quay lại</a>
    <hr>
    <form action="{{route('admin.roles.permission_post_add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(!empty($errors->any()))
            <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
        @endif

        @if(!empty(session('msg')))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Danh sách chức năng</label>
                    <select class="form-control" name="module_parent">
                        @if(!empty(config('permission.permissionModule')))
                            @foreach(config('permission.permissionModule') as $key => $module)
                            <option value="{{$key}}">{{$key}} - {{$module}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('display_name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    @if(!empty(config('permission.permissionChildren')))
                        @foreach(config('permission.permissionChildren') as $key => $value)
                        <div class="col">
                            <input type="checkbox" value="{{$value}}" id="{{$value.'-'.$key}}" name="module_children[]"/> <label for="{{$value.'-'.$key}}">{{$value}}</label>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <button class="btn btn-primary btn-sm my-3" type="submit">Thêm mới</button>
        </div>
    </form>
@endsection
