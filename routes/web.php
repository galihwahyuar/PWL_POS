<?php

//use App\Http\Controllers\KategoriController;
//use App\Http\Controllers\LevelController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index']);
Route::get('/token', [function () {
    return csrf_token();
}]);

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index']);          //menampilkan halaman awal user
    Route::get('/list', [UserController::class, 'list']);      //menampilkan data user dalam bentuk json untuk datables
    Route::get('/create', [UserController::class, 'create']);   //menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         //menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       //menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  //menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     //menyimpan perubahan dat user
    Route::delete('/{id}', [UserController::class, 'destroy']); //menghapus data user
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');


    Route::group(['middleware'=>['auth']], function(){

        Route::group(['middleware'=>['cek_login:1']], function() {
            Route::resource('admin', AdminController::class);
        });
        Route::group(['middleware'=>['cek_login:2']], function() {
            Route::resource('manager', ManagerController::class);
    });
});
});






