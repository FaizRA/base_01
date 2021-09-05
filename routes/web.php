<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\UserAccess;
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


Route::get('/qwert/login', [AuthController::class, 'index'])->name('loginPage');
Route::post('/qwert/login_process', [AuthController::class, 'loginProcess'])->name('loginProcess');

Route::group(['middleware' => UserAccess::class], function() {
    Route::get('/qwert', [DashboardController::class, 'index'])->name('admin_dashboard');
    Route::get('/qwert/log_out', [AuthController::class, 'logoutProcess'])->name('admin_log_out');
});


Route::get('/testo', [TestController::class, 'index']);

