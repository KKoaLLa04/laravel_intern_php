@extends('backend.layout')

@section('content')
    <h1>Danh sách account đã bị khóa</h1>
    @can('create', \App\Models\User::class)
        <a href="{{route('admin.users.homeController')}}" class="btn btn-dark">Quay lại</a>
    @endcan
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
            <th>Nhóm</th>
            <th>Ngày Tạo</th>
            <th width="10%">Trạng thái</th>
            @can('users.edit')
                <th width="10%">Khôi phục</th>
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
                    <td><a href="#">{{$user->group->name}}</a></td>
                    <td>{{$user->created_at}}</td>
                    <td><button class="btn btn-danger">Đã Khóa</button></td>
                    @can('users.edit')
                        <td><a href="{{route('admin.users.restore', $user)}}" class="btn btn-warning">Khôi phục</a></td>
                    @endcan
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
