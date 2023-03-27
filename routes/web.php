<?php

use App\Http\Controllers\OutletController;
use App\Http\Controllers\MemberController;
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
    return view('welcome');
});
Route::get('/login', function () {
    return view('sesi.login');
});
Route::get('/admin', function () {
    return view('admin.home');
});

Route::resource('outlet', OutletController::class);
// sesi login dan regis
Route::get('sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('sesi/logout', [SessionController::class, 'logout']);
Route::get('sesi/regis', [SessionController::class, 'registrasi']);
Route::post('sesi/create', [SessionController::class, 'create']);

Route::resource('member', MemberController::class);
