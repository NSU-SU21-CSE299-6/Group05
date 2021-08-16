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
use App\Http\Controllers\club_president_profileController;
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
Route::get('/addmember', [AddmembersController::class, 'addmember']);
//save member
Route::post('/save_member', [AddmembersController::class, 'savemember']);
//all member
Route::get('/allmember', [AllmembersController::class, 'allmember']);
//members profile
Route::get('/membersprofile', [profileController::class, 'memberprofile']);
//perticipated events
Route::get('/perticipatedevents', [profileController::class, 'perticipatedevent']);
// NSU ACM
Route::get('/nsuacm', [nsuacmController::class, 'nsuacm']);
//NSU PS
Route::get('/nsups', [nsupsController::class, 'nsups']);
//NSU IEEE
Route::get('/nsuieee', [nsuieeeController::class, 'nsuieee']);
//NSU SSC
Route::get('/nsussc', [nsusscController::class, 'nsussc']);
//CLUB president profile
Route::get('/clubpresidentprofile', [club_president_profileController::class, 'presindentprofile']);