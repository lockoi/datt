<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuanTTController;
use App\Http\Controllers\GiangVienController;
use App\Http\Controllers\bainopController;
use App\Http\Controllers\hockyController;
use App\Http\Controllers\monhocController;
use App\Http\Controllers\lophocController;
use App\Http\Controllers\userController;
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
Route::get('/dangxuat', [userController::class, 'dangxuat']);
Route::get('/dangnhap', [userController::class, 'dangnhap']);
Route::get('/dangky', [userController::class, 'dangky']);
Route::get('/quenmk', [userController::class, 'quenmk']);
Route::get('/thongtin', [userController::class, 'thongtin']);
Route::get('capnhat', [userController::class, 'capnhat']);
Route::get('error', [DuanTTController::class, 'error']);

Route::group(['prefix'=>'gv'],function(){
    Route::get('/', [GiangVienController::class, 'index']);
    Route::get('hocky', [GiangVienController::class, 'hk']);
    Route::get('monhoc', [GiangVienController::class, 'monhoc']);
    Route::get('lophoc', [GiangVienController::class, 'lophoc']);
    Route::get('download', [GiangVienController::class, 'download']);
});


Route::group(['prefix'=>'/'],function(){
    Route::get('/', [DuanTTController::class, 'index']);
    Route::get('hocky', [DuanTTController::class, 'hocky']);
    Route::get('monhoc', [DuanTTController::class, 'monhoc']);
    Route::get('lophoc', [DuanTTController::class, 'lophoc']);
    Route::get('nopbai', [DuanTTController::class, 'nopbai']);
    Route::get('taifile', [DuanTTController::class, 'taifile']);
    Route::get('giangvien', [DuanTTController::class, 'giangvien']);
});


Route::group(['prefix'=>'admin'],function(){
    Route::get('/', [DuanTTController::class, 'admin']);
    Route::group(['prefix'=>'bainop'],function(){
        Route::get('ds', [bainopController::class, 'ds']);
        Route::get('them', [bainopController::class, 'them']);
        Route::get('sua', [bainopController::class, 'sua']);
    });
    Route::group(['prefix'=>'hocky'],function(){
        Route::get('ds', [hockyController::class, 'ds']);
        Route::get('them', [hockyController::class, 'them']);
        Route::get('sua', [hockyController::class, 'sua']);
    });
    Route::group(['prefix'=>'monhoc'],function(){
        Route::get('ds', [monhocController::class, 'ds']);
        Route::get('them', [monhocController::class, 'them']);
        Route::get('sua', [monhocController::class, 'sua']);
    });
    Route::group(['prefix'=>'lophoc'],function(){
        Route::get('ds', [lophocController::class, 'ds']);
        Route::get('them', [lophocController::class, 'them']);
        Route::get('sua', [lophocController::class, 'sua']);
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('ds', [userController::class, 'ds']);
        Route::get('them', [userController::class, 'them']);
        Route::get('sua', [userController::class, 'sua']);
    });
});
