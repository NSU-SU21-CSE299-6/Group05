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
use App\Http\Controllers\AllPresidentController;
use App\Http\Controllers\messengerController;
use App\Http\Controllers\HomeController;

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

//User Login
Route::get('/', function () {
    return view('User.login');
});
//logout
Route::get('/log_out', [HomeController::class, 'logout']);
//User dashboard
Route::post('/userlogin', [HomeController::class, 'user_login']);
Route::get('/user_dashboard', [HomeController::class, 'user_dashboard']);


//admin login .....
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//logout
Route::get('/log-out', [AdminController::class, 'logout']);
//admin dashboard
Route::post('/adminlogin', [AdminController::class, 'login_dashboard']);
Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard']);

//Messenger
Route::get('/messenger', [messengerController::class, 'messenger']);
//sent message
//Route::post('/save_member', [AddmembersController::class, 'savemember']);

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

//Member View
Route::get('member_view/{member_id}',[AllmembersController::class, 'memberview']);  

//Member Edit
Route::get('member_edit/{member_id}',[AllmembersController::class, 'memberedit']);


//Member delete
Route::get('member_delete/{member_id}',[AllmembersController::class, 'memberdelete']);

//Edit update
Route::post('update_member/{member_id}',[AllmembersController::class, 'memberupdate']);

//All president 
Route::get('/allpresident',[AllPresidentController::class, 'allpresident']);

//President View
Route::get('president_view/{president_id}',[AllPresidentController::class, 'presidentview']);  

//All president 
Route::get('/addpresident',[AllPresidentController::class, 'addpresident']);

//save president
Route::post('/save_president', [AllPresidentController::class, 'savepresident']);

//member login
Route::get('/', function () {
    return view('member.member_login');
});
//logout
Route::get('/member_logout', [AdminController::class, 'member_logout']);
//member dashboard
Route::post('/memberlogin', [AdminController::class, 'memberlogin']);
Route::get('/member_dashboard', [AdminController::class, 'member_dashboard']);


//member_profile
Route::get('/member_profile', [AddmembersController::class, 'memberprofile']);

//member_setting
Route::get('/member_setting',[AdminController::class, 'membersetting']);


//update own profile
Route::post('/update_own_profile',[AllmembersController::class, 'updateownprofile']);  

