<?php

use App\Http\Controllers\Admin\AuthController;
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
    return view('front');
});


Route::get('/qwert/login', [AuthController::class, 'index']);
Route::post('/qwert/login_process', [AuthController::class, 'loginProcess'])->name('loginProcess');


Route::get('/testo', [\App\Http\Controllers\TestController::class, 'index']);

