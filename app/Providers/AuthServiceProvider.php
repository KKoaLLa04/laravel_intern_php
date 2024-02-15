<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Categories;
use App\Models\Permission;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use PhpParser\Node\Expr\Empty_;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        $permissions = Permission::all();
        if(!empty($permissions)){
            foreach($permissions as $key => $item){
                Gate::define($item->key_code, function($user) use ($item){
                    return $user->checkPermissionAccess($item->key_code);
                });
            }
        }
    }
}
