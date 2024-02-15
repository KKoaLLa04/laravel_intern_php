@extends('backend.layout')

@section('content')
    <h1>Danh sách bài viết đã bị xóa</h1>
    <a href="{{route('admin.posts.homeController')}}" class="btn btn-success">Danh sách</a>
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
            <th width="10%">Khôi phục</th>
            <th width="10%">Xóa vĩnh viễn</th>
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
                    <td><a href="{{route('admin.posts.restore', $post)}}" class="btn btn-primary">Khôi phục</a></td>
                    <td>
                        <a href="{{route('admin.posts.force_delete', $post)}}" class="btn btn-danger" onclick="return confirm('Bạn có chac chan muon xoa vinh vien?')">Xóa vĩnh viễn</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
