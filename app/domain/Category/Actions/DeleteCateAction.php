<?php

namespace App\domain\Category\Actions;

use App\domain\Category\DTO\CategoryDTO;
use App\domain\Category\DTO\DeleteDTO;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DeleteCateAction
{
    public function __construct(
        protected Post $posts,
        protected Category $category,
    )
    {
    }

    public function handle(DeleteDTO $deleteDTO): void
    {
        $id = $deleteDTO->getId();
        if(!empty($id)){
            $cateDetail = $this->category->find($id);
            $postCount = $this->posts->where('cate_id', $id)->get()->count();
            if($postCount>0){
                Session::flash('error','Danh mục còn '. $postCount .' bài viết. Không thể xóa');
            }else{
                if(!empty($cateDetail)){
                    $this->category->destroy($cateDetail->id);
                }
                Session::flash('msg','Xóa danh mục bài viết thành công');
            }

        }
    }
}
