<?php

namespace App\domain\Posts\Features;

use App\domain\Posts\Actions\DeletedPostAction;
use App\domain\Posts\Requests\DeleteRequest;

class DeletedPostFeature
{
    public function __construct(
        protected DeletedPostAction $deletedPostAction,
    )
    {
    }

    public function handle()
    {
        return $this->deletedPostAction->handle();
    }
}
