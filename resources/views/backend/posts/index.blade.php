@extends('backend.layout')

@section('content')
    <h1>Danh sách bài viết</h1>
    @can('posts_add')
    <a href="{{route('admin.posts.add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Thêm bài viết mới</a>
    @endcan
    <a href="{{route('admin.posts.deleted')}}" class="btn btn-danger"><i class="fa fa-trash"></i> Bài viết đã xóa</a>
    <hr>
    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th width="10%">Ảnh mh</th>
                <th>Tiêu đề</th>
                <th>Danh mục</th>
                <th>Người Đăng</th>
                <th>Ngày Tạo</th>
                @can('posts_edit')
                <th width="5%">Sửa</th>
                @endcan
                @can('posts_delete')
                <th width="5%">Xóa</th>
                @endcan
            </tr>
        </thead>

        <tbody>
            @if(!empty($listPost))
                @foreach($listPost as $key => $post)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{asset("uploads/posts/$post->thumbnail")}}" width="100%" /></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->category->title}}</td>
                        <td><a href="#">{{$post->users->name}}</a></td>
                        <td>{{$post->created_at}}</td>
                        @can('posts_edit')
                        <td><a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                        @endcan
                        @can('posts_delete')
                        <td>
                        <form action="{{route('admin.posts.delete', $post)}}" method="post">
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
