<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Front\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('admin')->group(function () {
        //article
        Route::get('/article',[ArticleController::class,'index'])->name('admin.article.index');
        Route::get('/article-create',[ArticleController::class,'create'])->name('admin.article.create');
        Route::post('/article-store',[ArticleController::class,'store'])->name('admin.article.store');
        Route::get('/article-edit/{id}',[ArticleController::class,'edit'])->name('admin.article.edit');
        Route::put('/article-update/{id}',[ArticleController::class,'update'])->name('admin.article.update');
        Route::get('/article-destroy/{id}',[ArticleController::class,'destroy'])->name('admin.article.destroy');

        //category
        Route::get('/category',[CategoryController::class,'index'])->name('admin.category.index');
        Route::get('/category-create',[CategoryController::class,'create'])->name('admin.category.create');
        Route::post('/category-store',[CategoryController::class,'store'])->name('admin.category.store');
        Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::get('/category-destroy/{id}',[CategoryController::class,'destroy'])->name('admin.category.destroy');
        //comment
        Route::get('/comment',[CommentController::class,'index'])->name('admin.comment.index');
        Route::get('/comment-show/{id}',[CommentController::class,'show'])->name('admin.comment.show');
        Route::get('/comment-edit/{id}',[CommentController::class,'edit'])->name('admin.comment.edit');
        Route::post('/comment-update/{id}',[CommentController::class,'update'])->name('admin.comment.update');
        Route::post('/comment-store',[CommentController::class,'store'])->name('admin.comment.store');

    });
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/index',[HomeController::class,'index'])->name('home.index');
Route::get('/post/{id}',[HomeController::class,'show'])->name('home.post.show');


require __DIR__.'/auth.php';
