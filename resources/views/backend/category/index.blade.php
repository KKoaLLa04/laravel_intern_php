@extends('backend.layout')

@section('content')
    <h1>Danh mục bài viết</h1>
    @can('category_list')
    <a href="{{route('admin.category.add')}}" class="btn btn-success">Thêm danh mục mới <i class="fa fa-plus"></i></a>
    @endcan
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
            <th>Tiêu đề</th>
            <th>Ngày Tạo</th>
            @can('category_edit')
            <th width="5%">Sửa</th>
            @endcan
            @can('category_delete')
            <th width="5%">Xóa</th>
            @endcan
        </tr>
        </thead>

        <tbody>
        @if(!empty($lists))
            @foreach($lists as $key => $post)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    @can('category_edit')
                    <td><a href="{{route('admin.category.edit', $post)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    @endcan
                    @can('category_delete')
                    <td>
                    <form method="post" action="{{route('admin.category.delete', $post)}}">
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
