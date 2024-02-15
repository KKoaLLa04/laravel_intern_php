<?php

namespace App\domain\Client\Controllers;

use App\domain\Client\Features\CommentFeature;
use App\domain\Client\Features\GetChildrenCommentFeature;
use App\domain\Client\Features\GetCommentFeature;
use App\domain\Client\Features\GetDataFeature;
use App\domain\Client\Features\GetDataLatestFeature;
use App\domain\Client\Features\GetDetailFeature;
use App\domain\Client\Features\GetReplyCommentFeature;
use App\domain\Client\Features\ReplyCommentFeature;
use App\domain\Client\Requests\CommentRequest;
use App\domain\Client\Requests\DetailRequest;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class HomeController extends Controller
{
    public function __construct(
        protected GetDataFeature $getDataFeature,
        protected GetDetailFeature $getDetailFeature,
        protected GetDataLatestFeature $getDataLatestFeature,
        protected CommentFeature $commentFeature,
        protected GetCommentFeature $getCommentFeature,
        protected ReplyCommentFeature $replyCommentFeature,
        protected GetChildrenCommentFeature $getChildrenCommentFeature
    )
    {
    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data = $this->getDataFeature->handle();
        return view('client.pages.home', compact('data'));
    }

    public function detail(DetailRequest $detailRequest){
        $data = $detailRequest->getDTO();
        $dataDetail = $this->getDetailFeature->handle($data);
        $dataLastest = $this->getDataLatestFeature->handle();
        $commentList = $this->getCommentFeature->handle($data);
        $commentChildren = $this->getChildrenCommentFeature->handle($data);
        if(!empty($_COOKIE['commentInfo'])){
            $commentInfoCookie = json_decode($_COOKIE['commentInfo'], true);
        }else{
            $commentInfoCookie = null;
        }
        return view('client.pages.detail', compact('dataDetail', 'dataLastest', 'commentList', 'commentChildren', 'commentInfoCookie'));
    }

    public function comments(CommentRequest $commentRequest){
        $data = $commentRequest->getDTO();
        $this->commentFeature->handle($data);
        return back()->with('msg','Thêm bình luận thành công');
    }

    public function comment_reply(DetailRequest $detailRequest){
        $data = $detailRequest->getDTO();
        $dataDetail = $this->getDetailFeature->handle($data);
        $dataLastest = $this->getDataLatestFeature->handle();
        $commentList = $this->getCommentFeature->handle($data);
        $commentReply = Comment::find($detailRequest->comment);
        $commentChildren = $this->getChildrenCommentFeature->handle($data);
        if(!empty($_COOKIE['commentInfo'])){
            $commentInfoCookie = json_decode($_COOKIE['commentInfo'], true);
        }else{
            $commentInfoCookie = null;
        }
        return view('client.pages.detail', compact('dataDetail', 'dataLastest', 'commentList', 'commentReply', 'commentChildren', 'commentInfoCookie'));
    }

    public function handleReplyComment(CommentRequest $commentRequest){
        $data = $commentRequest->getDTO();
        $this->replyCommentFeature->handle($data);
        return back()->with('msg','Trả lời bình luận thành công');
    }
}
