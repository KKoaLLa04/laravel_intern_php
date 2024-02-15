@extends('backend.layout')

@section('content')
    <h1>Chức vụ</h1>
    <a href="{{route('admin.roles.add')}}" class="btn btn-success">Thêm chức vụ mới <i class="fa fa-plus"></i></a>
    <hr>
    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th width="3%">#</th>
            <th>Tên chức vụ</th>
            <th>Mô tả vai trò</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xóa</th>
        </tr>
        </thead>

        <tbody>
        @if(!empty($listRole))
            @foreach($listRole as $key => $role)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->display_name}}</td>
                    <td><a href="{{route('admin.roles.edit', $role)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td>
                        <form method="post" action="{{route('admin.roles.delete', $role)}}">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
