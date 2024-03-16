<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;

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
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//article
Route::get('/article',[ArticleController::class,'index'])->name('article.index');
Route::get('/article-create',[ArticleController::class,'create'])->name('article.create');
Route::post('/article-store',[ArticleController::class,'index'])->name('article.store');
Route::get('/article-edit/{id}',[ArticleController::class,'index'])->name('article.edit');
Route::post('/article-update/{id}',[ArticleController::class,'index'])->name('article.update');
Route::get('/article-destroy/{id}',[ArticleController::class,'index'])->name('article.destroy');

//category
Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category-store',[CategoryController::class,'index'])->name('category.store');
Route::get('/category-edit/{id}',[CategoryController::class,'index'])->name('category.edit');
Route::post('/category-update/{id}',[CategoryController::class,'index'])->name('category.update');
Route::get('/category-destroy/{id}',[CategoryController::class,'index'])->name('category.destroy');
//comment
Route::get('/comment',[CommentController::class,'index'])->name('comment.index');
Route::get('/comment-create',[CommentController::class,'create'])->name('comment.create');
Route::post('/comment-store',[CommentController::class,'index'])->name('comment.store');
Route::get('/comment-edit/{id}',[CommentController::class,'index'])->name('comment.edit');
Route::post('/comment-update/{id}',[CommentController::class,'index'])->name('comment.update');
Route::get('/comment-destroy/{id}',[CommentController::class,'index'])->name('comment.destroy');


require __DIR__.'/auth.php';
