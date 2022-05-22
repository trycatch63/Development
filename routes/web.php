<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/register', function () {
    return view('project_folder.register');
});
Route::get('/login', function () {
    return view('project_folder.login');
});
//Route::get('/create_post', function () {
//
//    return view('project_folder.post');
//})->name('create_post')->middleware('auth');

Route::get('/create_post', [PostController::class,'index'])->name('create_post')->middleware('auth');


Route::get('/create_page', function () {
            return view('project_folder.page');
        })->name('create_page')->middleware('auth');

Route::get('/follow', [FollowController::class,'index'])->name('follow')->middleware('auth');

Route::get('/feed', [FollowController::class,'feed'])->name('feed')->middleware('auth');

