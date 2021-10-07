<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JaksaController;
use App\Http\Controllers\PenyidikController;
use App\Http\Controllers\PerkaraController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');   
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::resource('jaksa', JaksaController::class);
Route::resource('penyidik', PenyidikController::class);
Route::resource('perkara', PerkaraController::class);
// Route::get('/', function () {
//     return view('dashboard.index');
// });