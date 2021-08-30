<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class HomeController extends Controller
{
   public function user_dashboard(){
   	return view('User.Userdashboard');
   }
   //logout part
   public function logout(){
	   session::put('name',null);
	   session::put('id',null);

	   return Redirect::to('/');
   }

   //user login dashboard
   public function user_login(Request $request){
   	//return view('admin.dashboard');
   	$email = $request->email;
   	$password = md5($request->password);
   	$result = DB::table('users')
   	->where('email', $email)
   	->where('password',$password)
   	->first(); // first row of db
   	//->get(); will take whole db

   	//echo '<pre>';
   	//print_r($result);
   	If ($result){
   		//Session:put(); take inpage something/value;
   		Session::put('email',$result->email);
   		Session::put('id',$result->id);
   		return Redirect::to('/user_dashboard');
   	}
   	else{
   		Session::put('exception','Email or Password Invalid');
   		return Redirect::to('/');
   	}
   }
}
