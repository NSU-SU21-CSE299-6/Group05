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
Route::get('/log-out', [AdminController::class, 'logout']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login .....
Route::post('/adminlogin', [AdminController::class, 'login_dashboard']);
Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard']);

//add member
Route::get('/allmember', [AddmembersController::class, 'addmember']);
//all member
Route::get('/addmember', [AddmembersController::class, 'addmember']);
//members profile
Route::get('/membersprofile', [AddmembersController::class, 'addmember']);
//perticipated events
Route::get('/perticipatedevents', [AddmembersController::class, 'addmember']);
// NSU ACM
Route::get('/nsuacm', [AddmembersController::class, 'addmember']);
//NSU PS
Route::get('/nsups', [AddmembersController::class, 'addmember']);
//NSU IEEE
Route::get('/nsuieee', [AddmembersController::class, 'addmember']);
//NSU SSC
Route::get('/nsussc', [AddmembersController::class, 'addmember']);
//CLUB president profile
Route::get('/clubpresidentprofile', [AddmembersController::class, 'addmember']);