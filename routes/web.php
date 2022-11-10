<?php

use App\Http\Controllers\BerandaController;
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
<<<<<<< HEAD
Route::resource('/tanam',BerandaController::class);

=======
Route::resource('tanam',TanamController::class);

Route::get('/daftar', function () {
    return view('daftar');
});
>>>>>>> 80c03f69f49a1bc712c3efa48009beed5f872172
