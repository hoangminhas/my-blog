<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.auth.login');
});

Route::middleware('checkAuth')->group(function() {
    Route::prefix('blog')->group(function(){
        //Show index posts
        Route::get('', [PostController::class, 'index'])->name('blog.index');
        //Detail post
        Route::get('/{id}/show', [PostController::class, 'show'])->name('blog.show');
        //Delete post
        Route::get('/{id}/delete', [PostController::class, 'destroy'])->name('blog.destroy');
        //Add blog
        Route::get('create', [PostController::class, 'create'])->name('blog.create');
        Route::post('create', [PostController::class, 'store'])->name('blog.store');
        //Update blog
        Route::get('/{id}/edit', [PostController::class, 'edit'])->name('blog.edit');
        Route::put('/{id}/edit', [PostController::class, 'update'])->name('blog.update');
    });
});

//Login
Route::get('login', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

//Sign up
Route::get('signup', [AuthController::class, 'showFormSignup'])->name('showFormSignup');
Route::post('signup', [AuthController::class, 'signup'])->name('signup');

//logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
