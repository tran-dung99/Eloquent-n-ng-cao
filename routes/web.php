<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Repositories\PostRepository;
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
    return view('welcome');
});


Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, "index"])->name('users.index');
    Route::get('/{id}/detail', [UserController::class, "show"])->name('users.detail');
    Route::get('/{id}/delete', [UserController::class, "delete"])->name('users.delete');
    Route::get('/create', [UserController::class, "create"])->name('users.create');
    Route::post('/store', [UserController::class, "store"])->name('users.store');
    Route::get('/{id}/formUpdate', [UserController::class, "showFormUpdate"])->name('users.formUpdate');
    Route::post('/update', [UserController::class, "update"])->name('users.update');
});

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, "index"])->name('posts.index');
    Route::get('/{id}/detail', [PostController::class, "show"])->name('posts.detail');
    Route::get('/{id}/delete', [PostController::class, "delete"])->name('posts.delete');
    Route::get('/create', [PostController::class, "create"])->name('posts.create');
    Route::post('/create', [PostController::class, "store"])->name('posts.store');
    Route::get('/{id}/formUpdate', [PostController::class, "edit"])->name('posts.formUpdate');
    Route::post('/update',[PostController::class,"update"])->name('posts.update');
});


