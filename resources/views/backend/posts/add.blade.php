@extends('backend.layout')

@section('content')
<h1>Thêm bài viết mới</h1>
    <a href="{{route('admin.posts.homeController')}}" class="btn btn-success">Quay lại</a>
<hr>
<form action="{{route('admin.posts.post_add')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(!empty($errors->any()))
        <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
    @endif

    @if(!empty(session('msg')))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tiêu Đề</label>
                <input type="text" class="form-control" onkeyup="ChangeToSlug()" id="slug" placeholder="Tiêu đề bài viết...." name="title" value="{{old('title')}}">
                @error('title')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>

        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="convert_slug" placeholder="Slug bài viết...." name="slug" value="{{old('slug')}}">
                @error('slug')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="form-group">
                <label for="">Mô tả </label>
                <textarea class="form-control editor" name="description">{{old('description')}}</textarea>
                @error('description')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea class="form-control editor" name="content">{{old('content')}}</textarea>
                @error('content')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="">Ảnh mh</label>
                <input type="file" class="form-control"  name="thumbnail">
                @error('thumbnail')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="">Danh mục</label>
                <select class="form-control" name="cate_id">
                    @if(!empty($category))
                        @foreach($category as $key => $cate)
                    <option value="{{$cate->id}}" {{old('cate_id')==$cate->id?'selected':false}}>{{$cate->title}}</option>
                        @endforeach
                    @endif
                </select>
                @error('cate_id')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </div>

        <button class="btn btn-primary mb-3" type="submit">Thêm mới</button>
    </div>
</form>
@endsection
