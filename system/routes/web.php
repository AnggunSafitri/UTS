<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\PenulisAdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\BlogPenulisController;
use App\Http\Controllers\BasePenulisController;


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

// Route::get('/', function () {
//     return view('template.web');
// });

Route::resource('/', WebController::class);
Route::get('blog', [WebController::class, 'blog']);
Route::get('detail-blog/{blog}', [WebController::class, 'show']);
Route::post('post-comment', [WebController::class, 'comment']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('/', AdminController::class);
    Route::resource('penulis', PenulisAdminController::class);
    Route::get('penulis-edit/{penulis}', [PenulisAdminController::class, 'edit']);
    Route::put('penulis-update/{penulis}', [PenulisAdminController::class, 'update']);


    Route::resource('/blog', BlogAdminController::class);
    Route::resource('/user', UserController::class);
    Route::get('user/delete/{user}', [UserController::class, 'destroy']);
});

Route::group( [ 'middleware' => 'auth:penulis' ], function(){
    Route::resource('/penulis', BasePenulisController::class);
    Route::get('penulis-profil/{penulis}', [BasePenulisController::class, 'profil']);
    Route::put('penulis-update/{penulis}', [BasePenulisController::class, 'update']);
    Route::resource('blog', BlogPenulisController::class);
    Route::post('balas-komentar', [BlogPenulisController::class, 'balasCommnet']);

});

Route::get ('/test', [AuthController::class, 'test']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);