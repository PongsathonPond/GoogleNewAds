<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//frontend
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('tutorial/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);
Route::get('/tutorial/{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewPost']);

// Comment System
Route::post('comments', [App\Http\Controllers\Frontend\CommentController::class, 'store']);
Route::post('delete-comment', [App\Http\Controllers\Frontend\CommentController::class, 'destroy']);

Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

//category
Route::get('admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
Route::get('admin/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
Route::post('admin/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
Route::get('admin/edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::put('admin/update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
//    Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);
Route::post('admin/delete-category', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

//posts
Route::get('admin/posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
Route::get('admin/add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
Route::post('admin/add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
Route::get('admin/post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
Route::put('admin/update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
Route::get('admin/delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);

//users
Route::get('admin/users', [App\Http\Controllers\Admin\UserController::class, 'index']);
Route::get('admin/user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::put('admin/update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);

Route::get('admin/settings', [App\Http\Controllers\Admin\SettingController::class, 'index']);
Route::post('admin/settings', [App\Http\Controllers\Admin\SettingController::class, 'savedata']);
