@extends('backend.layout')

@section('content')
    <h1>Cập nhật bài viết</h1>
    <a href="{{route('admin.posts.homeController')}}" class="btn btn-success">Quay lại</a>
    <hr>
    @if(!empty($errors->any()))
        <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
    @endif
    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <form action="{{route('admin.posts.post_edit', $postDetail)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu Đề</label>
                    <input type="text" class="form-control" onkeyup="ChangeToSlug()" id="slug" placeholder="Tiêu đề bài viết...." name="title" value="{{old('title') ?? $postDetail->title}}">
                    @error('title')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" id="convert_slug" placeholder="Slug bài viết...." name="slug" value="{{old('slug') ?? $postDetail->slug}}">
                    @error('slug')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="form-group">
                    <label for="">Mô tả </label>
                    <textarea class="form-control editor" name="description">{{old('description') ?? $postDetail->description}}</textarea>
                    @error('description')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea class="form-control editor" name="content">{{old('content') ?? $postDetail->content}}</textarea>
                    @error('content')
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
                                <option value="{{$cate->id}}" {{old('cate_id')==$cate->id || $postDetail->cate_id==$cate->id ?'selected':false}}>{{$cate->title}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('cate_id')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label for="">Ảnh mh (không chọn nếu không đổi)</label>
                    <input type="file" class="form-control"  name="thumbnail">
                    @error('thumbnail')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-3">
                <label for="">Ảnh mh</label>
                <img src="{{asset("uploads/posts/$postDetail->thumbnail")}}" width="100%"/>
            </div>

            <button class="btn btn-primary mb-3" type="submit">Cập nhật</button>
        </div>
    </form>
@endsection
