<?php

namespace App\domain\Category\Controllers;

use App\domain\Category\DTO\CategoryDTO;
use App\domain\Category\DTO\FindCateDTO;
use App\domain\Category\Features\AddCategoryFeature;
use App\domain\Category\Features\DeleteCategoryFeature;
use App\domain\Category\Features\EditCategoryFeature;
use App\domain\Category\Features\FindCateFeature;
use App\domain\Category\Features\GetCategoryFeature;
use App\domain\Category\Requests\CategoryRequest;
use App\domain\Category\Requests\FindCateRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(
        protected Category              $categories,
        protected CategoryDTO           $categoryDTO,
        protected GetCategoryFeature    $getCategoryFeature,
        protected AddCategoryFeature    $addCategoryFeature,
        protected EditCategoryFeature   $editCategoryFeature,
        protected DeleteCategoryFeature $deleteCategoryFeature,
        protected FindCateFeature       $findCateFeature,
    )
    {
    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $lists = $this->getCategoryFeature->handle($this->categories);
        return view('backend.category.index', compact('lists'));
    }

    public function add(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('backend.category.add');
    }

    public function post_add(CategoryRequest $categoryRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $categoryRequest->getDTO();
        $this->addCategoryFeature->handle($data, $this->categories);
        return back()->with('msg', 'Thêm danh mục bài viết thành công!');
    }

    public function edit($id, FindCateRequest $findCateRequest): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
//        $findCateDTO = new FindCateDTO();
//        $findCateDTO->setId($id);
        $dataDTO = $findCateRequest->getDTO();
        $cateDetail = $this->findCateFeature->handle($dataDTO);
        return view('backend.category.edit', compact('cateDetail'));
    }

    public function post_edit($id, CategoryRequest $categoryRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $categoryRequest->getDTO();
        $this->editCategoryFeature->handle($data, $this->categories);
        return back()->with('msg','Cập nhật danh mục bài viết thành công');
    }

    public function delete(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->deleteCategoryFeature->handle($request, $this->categories);
        return back();
    }
}
