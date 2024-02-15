@extends('backend.layout')

@section('content')
    <h1>Cập nhật danh mục bài viết</h1>
    <a href="{{route('admin.category.homeController')}}" class="btn btn-success">Quay lại</a>
    <hr>
    @if(!empty($errors->any()))
        <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
    @endif

    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <form action="{{route('admin.category.post_edit', $cateDetail)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu Đề</label>
                    <input type="text" class="form-control" onkeyup="ChangeToSlug()" id="slug" placeholder="Tiêu đề danh mục bài viết...." name="title" value="{{old('title') ?? $cateDetail->title}}">
                    @error('title')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" id="convert_slug" placeholder="Slug danh mục bài viết...." name="slug" value="{{old('slug') ?? $cateDetail->slug}}">
                    @error('slug')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <button class="btn btn-primary mb-3" type="submit">Cập nhật</button>
        </div>
    </form>
@endsection
