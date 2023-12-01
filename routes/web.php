<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;


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


Route::get('/', [PostController::class, 'Index']);



Route::get('RegisterPage', [AdminController::class, 'RegisterPage']);

Route::get('LoginPage', [AdminController::class, 'LoginPage']);



Route::resource('Posts', PostController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {

    Route::get('Admin/CreatePost', [AdminController::class, 'Create'])->name('CreatePost');

    Route::post('Admin/Store', [AdminController::class, 'store'])->name('StorePost');

    Route::get('Admin/EditPost/{id}', [AdminController::class, 'edit'])->name('EditPost');

    Route::post('Admin/Update', [AdminController::class, 'Update'])->name('UpdatePost');

    Route::delete('Admin/DeletePost/{id}', [AdminController::class, 'destroy'])->name('DeletePost');

    Route::resource('Categories', CategoryController::class);

    Route::get('Admin', [AdminController::class, 'Start']);

    Route::get('Admin/Posts', [AdminController::class, 'Index'])->name('IndexPost');

    Route::get('Admin/show_comments', [AdminController::class, 'show_comments'])->name('show_comments');

    Route::post('Admin/store_comment', [AdminController::class, 'store_comment'])->name('store_comments');
    
    Route::get('Admin/delete_comment/{id}', [AdminController::class, 'delete_comments'])->name('delete_comment');

    Route::get('Admin/update_comment/{id}', [AdminController::class, 'update_comments'])->name('update_comment');
});
