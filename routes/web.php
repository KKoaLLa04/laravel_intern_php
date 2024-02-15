<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('homeController');

//*****************************************route admin*******************************************************
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function(){
    Route::prefix('category')->middleware('can:category_list')->name('category.')->group(function(){
        Route::get('/',[\App\domain\Category\Controllers\CategoryController::class, 'index'])->name('homeController')->can('category_list');

        Route::get('add',[\App\domain\Category\Controllers\CategoryController::class, 'add'])->name('add')->can('category_add');

        Route::post('post_add' ,[\App\domain\Category\Controllers\CategoryController::class, 'post_add'])->name('post_add')->can('category_add');

        Route::get('edit/{posts}' ,[\App\domain\Category\Controllers\CategoryController::class, 'edit'])->name('edit')->can('category_edit');

        Route::post('post_edit/{posts}' ,[\App\domain\Category\Controllers\CategoryController::class, 'post_edit'])->name('post_edit')->can('category_edit');

        Route::post('delete/{id}' ,[\App\domain\Category\Controllers\CategoryController::class, 'delete'])->name('delete')->can('category_delete');
    }) ;

    Route::prefix('posts')->middleware('can:posts_list')->name('posts.')->group(function(){
        Route::get('/',[\App\domain\Posts\Controllers\PostsController::class, 'index'])->name('homeController')->can('posts_list');

        Route::get('add',[\App\domain\Posts\Controllers\PostsController::class, 'add'])->name('add')->can('posts_add')->can('posts_add');

        Route::post('post_add' ,[\App\domain\Posts\Controllers\PostsController::class, 'post_add'])->name('post_add')->can('posts_add');

        Route::get('edit/{id}',[\App\domain\Posts\Controllers\PostsController::class, 'edit'])->name('edit')->can('posts_edit');

        Route::post('post_edit/{id}' ,[\App\domain\Posts\Controllers\PostsController::class, 'post_edit'])->name('post_edit')->can('posts_edit');

        Route::post('delete/{id}' ,[\App\domain\Posts\Controllers\PostsController::class, 'delete'])->name('delete')->can('posts_delete');

        Route::get('deleted' ,[\App\domain\Posts\Controllers\PostsController::class, 'deleted'])->name('deleted')->can('posts_delete');

        Route::get('restore/{id}' ,[\App\domain\Posts\Controllers\PostsController::class, 'restore'])->name('restore');

        Route::get('force_delete/{id}' ,[\App\domain\Posts\Controllers\PostsController::class, 'force_delete'])->name('force_delete');
    }) ;

    Route::prefix('users')->middleware('can:users_list')->name('users.')->group(function(){
        Route::get('/',[\App\domain\Users\Controllers\UsersController::class, 'index'])->name('homeController')->can('users_list');

        Route::get('add',[\App\domain\Users\Controllers\UsersController::class, 'add'])->name('add')->can('users_add');

        Route::post('post_add' ,[\App\domain\Users\Controllers\UsersController::class, 'post_add'])->name('post_add')->can('users_add');

        Route::get('edit/{id}',[\App\domain\Users\Controllers\UsersController::class, 'edit'])->name('edit')->can('users_edit');

        Route::post('post_edit/{id}' ,[\App\domain\Users\Controllers\UsersController::class, 'post_edit'])->name('post_edit')->can('users_edit');

        Route::post('delete/{id}' ,[\App\domain\Users\Controllers\UsersController::class, 'delete'])->name('delete')->can('users.delete')->can('users_delete');

        Route::get('deleted' ,[\App\domain\Users\Controllers\UsersController::class, 'deleted'])->name('deleted')->can('users_delete');

        Route::get('restore/{id}' ,[\App\domain\Users\Controllers\UsersController::class, 'restore'])->name('restore');

        Route::get('force_delete/{id}' ,[\App\domain\Users\Controllers\UsersController::class, 'force_delete'])->name('force_delete');
    }) ;

//    Route::prefix('roles')->middleware('can:permission_list')->name('roles.')->group(function(){
    Route::prefix('roles')->name('roles.')->group(function(){
        Route::get('/',[\App\domain\Roles\Controllers\RolesController::class , 'index'])->name('index')->can('permission_list');

        Route::get('add',[\App\domain\Roles\Controllers\RolesController::class, 'add'])->name('add')->can('permission_add');

        Route::post('post_add' ,[\App\domain\Roles\Controllers\RolesController::class, 'post_add'])->name('post_add')->can('permission_add');

        Route::get('edit/{id}',[\App\domain\Roles\Controllers\RolesController::class, 'edit'])->name('edit')->can('permission_edit');

        Route::post('post_edit/{id}' ,[\App\domain\Roles\Controllers\RolesController::class, 'post_edit'])->name('post_edit');

        Route::post('delete/{id}' ,[\App\domain\Roles\Controllers\RolesController::class, 'delete'])->name('delete')->can('permission_delete');

        Route::get('deleted' ,[\App\domain\Roles\Controllers\RolesController::class, 'deleted'])->name('deleted')->can('permission_delete');

        Route::get('permission_add' ,[\App\domain\Roles\Controllers\RolesController::class, 'permission_add'])->name('permission_add')->can('permission_add');

        Route::post('permission_post_add' ,[\App\domain\Roles\Controllers\RolesController::class, 'permission_post_add'])->name('permission_post_add')->can('permission_add');

        Route::get('restore/{id}' ,[\App\domain\Roles\Controllers\RolesController::class, 'restore'])->name('restore');

        Route::get('force_delete/{id}' ,[\App\domain\Roles\Controllers\RolesController::class, 'force_delete'])->name('force_delete');
    }) ;

});

// ****************************************Auth (route login)********************************************
\Illuminate\Support\Facades\Auth::routes([
    'register' => false
]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//****************************************route trang client*************************************************
Route::get('/trang-chu', [\App\domain\Client\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bai-viet/{slug}', [\App\domain\Client\Controllers\HomeController::class, 'detail'])->name('detail');
Route::post('/comment', [\App\domain\Client\Controllers\HomeController::class, 'comments'])->name('comments');
Route::post('/handle_reply/{id}', [\App\domain\Client\Controllers\HomeController::class, 'handleReplyComment'])->name('handleReply');
Route::get('/comment_reply/{slug}/{comment}', [\App\domain\Client\Controllers\HomeController::class, 'comment_reply'])->name('comment_reply');
