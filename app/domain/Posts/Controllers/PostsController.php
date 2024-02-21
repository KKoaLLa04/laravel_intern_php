<?php

namespace App\domain\Posts\Controllers;

use App\domain\Category\Requests\CategoryRequest;
use App\domain\Posts\DTO\ListPostDTO;
use App\domain\Posts\Features\AddPostFeature;
use App\domain\Posts\Features\DeletedPostFeature;
use App\domain\Posts\Features\DeletePostFeature;
use App\domain\Posts\Features\EditPostFeature;
use App\domain\Posts\Features\ForceDeleteFeature;
use App\domain\Posts\Features\GetCateFeature;
use App\domain\Posts\Features\GetPostDetailFeature;
use App\domain\Posts\Features\GetPostFeature;
use App\domain\Posts\Features\PostsFeature;
use App\domain\Posts\Features\RestorePostFeature;
use App\domain\Posts\Requests\DeleteRequest;
use App\domain\Posts\Requests\GetEditRequest;
use App\domain\Posts\Requests\PostEditRequest;
use App\domain\Posts\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use MongoDB\Driver\Session;

class PostsController extends Controller
{
    public function __construct(
        protected AddPostFeature $addPostFeature,
        protected GetPostFeature $getPostFeature,
        protected GetCateFeature $getCateFeature,
        protected EditPostFeature $editPostFeature,
        protected DeletePostFeature $deletePostFeature,
        protected DeletedPostFeature $deletedPostFeature,
        protected RestorePostFeature $restorePostFeature,
        protected ForceDeleteFeature $forceDeleteFeature,
        protected GetPostDetailFeature $getPostDetailFeature,
    )
    {
    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data = (new ListPostDTO())->fromRequest();
        $listPost = $this->getPostFeature->handle($data);
        return view('backend.posts.index', compact('listPost'));
    }

    public function add(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $category = $this->getCateFeature->handle();
        return view('backend.posts.add', compact('category'));
    }

    public function post_add(PostRequest $postRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $postRequest->getDTO();
        $this->addPostFeature->handle($data);
        return back()->with('msg','Thêm bài viết mới thành công');
    }

    public function edit(GetEditRequest $getEditRequest): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $data = $getEditRequest->getDTO();
        $postDetail = $this->getPostDetailFeature->handle();
        $category = $this->getCateFeature->handle();
        if(empty($postDetail)){
            return redirect()->route('admin.posts.homeController')->with('error','Liên kết không tồn tại hoặc đã bị xóa');
        }

        return view('backend.posts.edit',compact('postDetail', 'category'));
    }

    public function post_edit(PostEditRequest $postEditRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $postEditRequest->getDTO();
        $this->editPostFeature->handle($data);

        return back()->with('msg','Cập nhật bài viết thành công!');
    }

    public function delete(DeleteRequest $deleteRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $deleteRequest->getDTO();
        $this->deletePostFeature->handle($data);
        return back()->with('msg','Xóa bài viết thành công');
    }

    public function deleted(DeleteRequest $deleteRequest): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $listPost = $this->deletedPostFeature->handle();
        return view('backend.posts.deleted', compact('listPost'));
    }

    public function restore(DeleteRequest $deleteRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $deleteRequest->getDTO();
        $this->restorePostFeature->handle($data);
        return back()->with('msg','Khôi phục bản ghi thành công');
    }

    public function force_delete(DeleteRequest $deleteRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $deleteRequest->getDTO();
        $this->forceDeleteFeature->handle($data);
        return back()->with('msg','Bản ghi đã bị xóa vĩnh viễn!');
    }
}
