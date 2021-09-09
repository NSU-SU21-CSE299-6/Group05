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
   //logout part
   public function logout(){
	   session::put('admin_name',null);
	   session::put('admin_id',null);

	   return Redirect::to('/backend');
   }


   //admin login dashboard
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



   //member login
   public function member_dashboard(){
	return view('member.dashboard');
     }


	 //logout part
	 public function member_logout(){
		session::put('member_name',null);
		session::put('member_id',null);
 
		return Redirect::to('/');
	}
 
	//member login dashboard
	public function memberlogin(Request $request){
		//return view('admin.dashboard');
		$member_email = $request->member_email;
		$member_password = md5($request->member_password);
		$result = DB::table('members_tbl')
		->where('member_email', $member_email)
		->where('member_password',$member_password)
		->first(); // first row of db
		//->get(); will take whole db
 
		//echo '<pre>';
		//print_r($result);
		If ($result){
			//Session:put(); take inpage something/value;
			Session::put('member_email',$result->member_email);
			Session::put('member_id',$result->member_id);
			return Redirect::to('/member_dashboard');
		}
		else{
			Session::put('exception','Email or Password Invalid');
			return Redirect::to('/');
		}
	}
}
