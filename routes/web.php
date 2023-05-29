<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;
use App\Http\Controllers\Admin\ComicController;

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

Route::get('/', [PageController::class, 'comics'])->name('home');
Route::get('/show/{comic}', [PageController::class, 'comic'])->name('single_comic');

Route::resource('/admin/comics', ComicController::class);

Route::get('/single_comic', function () {
    return view('single_comic');
});

