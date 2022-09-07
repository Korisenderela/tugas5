<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;


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
//admin
Route::get('beranda', [HomeController::class, 'showberanda']);
Route::get('kategori', [HomeController::class, 'showKategori']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?})', [HomeControler::class, 'indek']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::prefix('master-data')->group(function(){
Route::resource('produk', ProdukController::class);
Route::resource('user', UserController::class);
    });
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::post('logout', [AuthController::class, 'Logout']);

