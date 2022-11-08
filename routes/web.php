<?php

use App\Http\Controllers\RouteController;
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

Route::get('/', [RouteController::class, 'indexPri'])->name('index');

Route::get('/registerNews', [RouteController::class, 'index'])->name('register');
Route::get('/News/1', [RouteController::class, 'new1'])->name('new1');
Route::get('/News/2', [RouteController::class, 'new2'])->name('new2');
