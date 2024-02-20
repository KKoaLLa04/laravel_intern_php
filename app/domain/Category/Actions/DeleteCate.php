<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\CategoryDTO;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DeleteCate
{
    public function __construct(
        protected Posts $posts,
    )
    {
    }

    public function handle(Request $request, Category $categories){
        $id = $request->id;
        if(!empty($id)){
            $cateDetail = $categories->find($id);
            $postCount = $this->posts->where('cate_id', $id)->get()->count();
            if($postCount>0){
                Session::flash('error','Danh mục còn '. $postCount .' bài viết. Không thể xóa');
            }else{
                if(!empty($cateDetail)){
                    $categories->destroy($cateDetail->id);
                }
                Session::flash('msg','Xóa danh mục bài viết thành công');
            }

        }
    }
}
