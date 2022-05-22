<?php


use App\Http\Controllers\FollowController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/auth/register',[UserController::class,'store'])->name('auth.register');
Route::post('/login',[UserController::class,'login'])->name('login');

//Route::middleware('auth:sanctum')->group(function () {
//    Route::get('/person/feed',[UserController::class,'index']);
//
//});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('page/create',[PageController::class,'store'])->name('page.create');
    Route::post('page/post',[PostController::class,'store'])->name('post.create');
    Route::post('/page/{pageId}/attach-post',[PostController::class,'from_page'])->name('page.post');
    Route::post('/follow/person/{personId}',[FollowController::class,'store'])->name('person.follow');
    Route::post('/follow/page/{pageId}',[FollowController::class,'follow_page'])->name('page.follow');

    Route::post('/person/feed',[UserController::class,'index']);

});


