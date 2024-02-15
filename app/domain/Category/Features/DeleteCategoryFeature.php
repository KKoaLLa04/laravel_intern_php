<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\DeleteCate;
use App\domain\Category\DTO\CategoryDTO;
use App\Models\Categories;
use Illuminate\Http\Request;

class DeleteCategoryFeature
{
    public function __construct(
        protected Categories $categories,
        protected DeleteCate $deleteCate,
    )
    {
    }

    public function handle(Request $request, Categories $categories): void{
        $this->deleteCate->handle($request, $categories);
    }
}
