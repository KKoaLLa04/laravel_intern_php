<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\DeleteCate;
use App\domain\Category\DTO\CategoryDTO;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteCategoryFeature
{
    public function __construct(
        protected Category   $categories,
        protected DeleteCate $deleteCate,
    )
    {
    }

    public function handle(Request $request, Category $categories): void{
        $this->deleteCate->handle($request, $categories);
    }
}
