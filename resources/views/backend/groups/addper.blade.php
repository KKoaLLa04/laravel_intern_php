@extends('backend.layout')

@section('content')
    <h1>Thêm quyền hạn mới</h1>
    <a href="{{route('admin.groups.homeController')}}" class="btn btn-success">Quay lại</a>
    <hr>
    @if(!empty($errors->any()))
        <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
    @endif

    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <form action="{{route('admin.groups.post_add_permission')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Quyền</label>
                    <select class="form-control" name="role_id">
                        @if(!empty($allRole))
                            @foreach ($allRole as $key => $role)
                                <option value="{{$role->id}}">{{$role->name}} - {{$role->title}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('role_id')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Tên nhóm người dùng</label>
                    <select class="form-control" name="module_id">
                        @if(!empty($allModules))
                            @foreach($allModules as $key => $module)
                                <option value="{{$module->id}}">{{strtoupper($module->name)}} - {{$module->title}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('module_id')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit">Thêm mới</button>
        </div>
    </form>
@endsection
