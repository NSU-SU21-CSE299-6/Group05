<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllmembersController;
use App\Http\Controllers\AddmembersController;
use App\Http\Controllers\nsuacmController;
use App\Http\Controllers\nsupsController;
use App\Http\Controllers\nsuieeeController;
use App\Http\Controllers\nsusscController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\club_prsident_profileController;
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
//logout
Route::get('/logout', [AdminController::class, 'logout']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login .....
Route::post('/adminlogin', [AdminController::class, 'login_dashboard']);
Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard']);