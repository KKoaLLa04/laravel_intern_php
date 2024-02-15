@extends('backend.layout')

@section('content')
    <h1>Quản lý nhóm người dùng</h1>
    <a href="{{route('admin.groups.add')}}" class="btn btn-success">Thêm nhóm nguoi dung moi <i class="fa fa-plus"></i></a>
    <a href="{{route('admin.groups.add_permission')}}" class="btn btn-primary">Thêm quyền hạn modules <i class="fa fa-plus"></i></a>
    <a href="{{route('admin.groups.add_role')}}" class="btn btn-info">Thêm quyền hạn website <i class="fa fa-plus"></i></a>
    <hr>
    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="3%">#</th>
            <th>Nhóm nguoi dung</th>
            <th>Ngày Tạo</th>
            <th width="15%">Phân Quyền</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xóa</th>
        </tr>
        </thead>

        <tbody>
        @if(!empty($lists))
            @foreach($lists as $key => $group)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$group->name}}</td>
                    <td>{{$group->created_at}}</td>
                    <td><a href="{{route('admin.groups.permissions', $group)}}" class="btn btn-primary">Phân quyền</a></td>
                    <td><a href="{{route('admin.groups.edit', $group)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td>
                        <form method="post" action="{{route('admin.groups.delete', $group)}}">
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
