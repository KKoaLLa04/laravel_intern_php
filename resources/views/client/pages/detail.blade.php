@extends('client.layout')

@section('content')
<main class="content mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="d-flex justify-content-between">
                    <a href="#" class="unset_decoration">Thời sự</a>
                    <p>Thứ hai, 22/1/2024, 12:33 (GMT+7)</p>
                </div>

                <h2>{{$dataDetail->title}}</h2>
                <p class="description">{!! $dataDetail->content  !!}.</p>
{{--                <div class="row">--}}
{{--                    <div class="col-8">--}}
{{--                        <img src="./assets/images/category/cate1.png" width="100%">--}}
{{--                    </div>--}}
{{--                    <div class="col-4">--}}
{{--                        <img src="./assets/images/category/cate1.png" width="100%" class="mb-2">--}}
{{--                        <img src="./assets/images/category/cate1.png" width="100%">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <div class="col-md-4 px-4 category_detail_lastest">
                <h4 class="add_border_bottom_red" style="color: #820300;">Xem nhiều - Mới nhất</h4>
                @if(!empty($dataLastest))
                    @foreach($dataLastest as $key => $lastest)
                        <a href="{{route("detail", $lastest->slug)}}" class="reset_link">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset("uploads/posts/$lastest->thumbnail")}}" width="100%">
                                </div>
                                <div class="col-8">
                                    <h5 class="my-0">{{$lastest->title}}</h5>
                                    <i class="fa fa-comment-alt"></i> {{($key + 1) * 3}}
                                </div>
                            </div>
                        </a>
                        <hr>
                    @endforeach
                @endif
            </div>
        </div>
        <hr>

        <div class="row mt-5">
            <div class="col-12">
                <h3>
                    @if(empty($commentReply))
                    Viết bình luận
                    @else
                        Trả lời bình luận: {{$commentReply->name}}
                        <a href="{{route('detail', $dataDetail->slug)}}" style="text-decoration: none"><i class="fa fa-times"></i> Hủy</a>
                    @endif

                </h3>
                <div class="col-8 pt-2">
                    @if($errors->any())
                        <div class="alert alert-danger">Có lỗi xảy ra, vui lòng kiểm tra lại</div>
                    @endif
                    @if(!empty(session('msg')))
                        <div class="alert alert-success">{{session('msg')}}</div>
                    @endif
                        @if(empty($commentReply))
                    <form action="{{route('comments')}}" method="post">
                        @else
                            <form action="{{route("handleReply", $commentReply->id)}}" method="post">
                        @endif
                        @csrf
                        <input type="hidden" name="post_id" value="{{$dataDetail->id}}"/>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Họ và tên..." value="{{old('name') ?? !empty($commentInfoCookie['name'])?$commentInfoCookie['name']:false}}">
                                @error('name')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Email của bạn..." value="{{old('email') ?? !empty($commentInfoCookie['email'])?$commentInfoCookie['email']:false}}">
                                @error('email')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="content" placeholder="Chia sẻ ý kiến của bạn">{{old('content')}}</textarea>
                                @error('content')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Bình luân</button>
                    </form>
                    <div class="pt-4"></div>

                    @if(!empty($commentList))
                        @foreach($commentList as $key => $comment)
                    <div class="row mb-3">
                        <div class="col-1">
                            <img src="{{asset('img/avatar.png')}}" width="100%" style="border-radius: 50px"/>
                        </div>
                        <div class="col-11">
                            <p class="mb-1"><b>{{$comment->name}}:</b> {{$comment->content}}</p>
                            <p>{{$comment->created_at}} <span class="mx-2"><i class="fa fa-thumbs-up"></i> Thích</span> <span class="mx-3"><a href="{{route('comment_reply',[$dataDetail->slug, $comment])}}" class="reset_link"><i class="fa fa-comment"></i><i>Reply</i></a></span></p>
                        </div>

                        @if(!empty($commentChildren))
                            @foreach($commentChildren as $count => $item)
                                @if($item->parent_id==$comment->id)
                                <div class="col-12 mx-5">
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="{{asset('img/avatar.png')}}" width="100%" style="border-radius: 50px"/>
                                        </div>
                                        <div class="col-11">
                                            <p class="mb-1"><b>{{$item->name}}:</b> {{$item->content}}</p>
                                            <p>{{$item->created_at}} <span class="mx-2"><i class="fa fa-thumbs-up"></i> Thích</span> <span class="mx-3"><a href="{{route('comment_reply',[$dataDetail->slug, $comment])}}" class="reset_link"><i class="fa fa-comment"></i><i>Reply</i></a></span></p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                      @endforeach
                    @endif
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
