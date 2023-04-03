<?php

use App\Http\Controllers\OutletController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\SessionController;
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
    return view('user.home-user');
});
Route::get('tentang', function () {
    return view('user.tentang');
});
Route::get('pesan', function () {
    return view('user.pesan');
});
Route::get('histori', function () {
    return view('user.histori');
});
Route::get('/admin', function () {
    return view('admin.home');
});

Route::resource('outlet', OutletController::class);
Route::resource('paket', PaketController::class);
// sesi login dan regis
Route::get('sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('sesi/logout', [SessionController::class, 'logout']);
Route::get('sesi/regis', [SessionController::class, 'registrasi']);
Route::post('sesi/create', [SessionController::class, 'create']);

Route::resource('member', MemberController::class);
