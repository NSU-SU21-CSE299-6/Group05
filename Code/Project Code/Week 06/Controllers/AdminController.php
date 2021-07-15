<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AdminController extends Controller
{
   public function admin_dashboard(){
   	return view('admin.dashboard');
   }
   public function login_dashboard(Request $request){
   	//return view('admin.dashboard');
   	$email = $request->admin_email;
   	$password = md5($request->admin_password);
   	$result = DB::table('admin_tbl')
   	->where('admin_email', $email)
   	->where('admin_password',$password)
   	->first(); // first row of db
   	//->get(); will take whole db

   	//echo '<pre>';
   	//print_r($result);
   	If ($result){
   		//Session:put(); take inpage something/value;
   		Session::put('admin_email',$result->admin_email);
   		Session::put('admin_id',$result->admin_id);
   		return Redirect::to('/admin_dashboard');
   	}
   	else{
   		Session::put('exception','Email or Password Invalid');
   		return Redirect::to('/backend');
   	}
   }
}
