<?php

use App\Http\Controllers\TanamController;
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
    return view('index');
});
Route::resource('tanam', TanamController::class);

Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/login', function () {
    return view('login');
});
