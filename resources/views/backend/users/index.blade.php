@extends('backend.layout')

@section('content')
    <h1>Danh sách ngươi dùng</h1>
    @can('users_add')
    <a href="{{route('admin.users.add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Thêm người dùng mới</a>
    @endcan
    <a href="{{route('admin.users.deleted')}}" class="btn btn-danger"><i class="fa fa-trash"></i> Account bị khóa</a>
    <hr>
    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Ngày Tạo</th>
            <th width="10%">Trạng thái</th>
            @can('users_edit')
            <th width="5%">Sửa</th>
            @endcan
            @can('users_delete')
            <th width="5%">Xóa</th>
            @endcan
        </tr>
        </thead>

        <tbody>
        @if(!empty($listUser))
            @foreach($listUser as $key => $user)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><button class="btn btn-success">Kích hoạt</button></td>
                    @can('users_edit')
                    <td><a href="{{route('admin.users.edit', $user)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    @endcan
                    @can('users_delete')
                    <td>
                        <form action="{{route('admin.users.delete', $user)}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                    @endcan
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
