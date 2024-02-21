<?php

namespace App\domain\Category\Features;

use App\domain\Category\Actions\DeleteCateAction;
use App\domain\Category\DTO\CategoryDTO;
use App\domain\Category\DTO\DeleteDTO;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteCategoryFeature
{
    public function __construct(
        protected DeleteCateAction $deleteCate,
    )
    {
    }

    public function handle(DeleteDTO $deleteDTO): void{
        $this->deleteCate->handle($deleteDTO);
    }
}
