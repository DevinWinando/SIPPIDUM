<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JaksaController;
use App\Http\Controllers\PenyidikController;

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

Route::resource('jaksa', JaksaController::class);
Route::resource('penyidik', PenyidikController::class);
// Route::get('/', [JaksaController::class, 'index']);
Route::get('/', function () {
    return view('dashboard.index');
});