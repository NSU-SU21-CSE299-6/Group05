<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddmembersController extends Controller
{
    // 
    public function addmember(){
        return view('admin.Addmember');
    }
       //
       public function savemember(Request $request){
    $data = array();
    $data['member_name'] = $request->member_name;
    $data['member_id'] = $request->member_id;
    $data['member_fathername'] = $request->member_fathername;
    $data['member_mothername'] = $request->member_mothername;
    $data['member_email'] = $request->member_email;
    $data['member_phone'] = $request->member_phone;
    $data['member_address'] = $request->member_address;
    $data['member_password'] = md5($request->member_password);
    $data['member_club'] = $request->member_club;
    $data['member_admissionyear'] = $request->member_admissionyear;
    $image=$request->file('member_image');
    if ($image){
        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name. '.' .$ext;
        $upload_path = 'iamge/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);
        if($success){
            $data['member_image'] = $image_url;
                DB::table('members_tbl')->insert($data);
                Session::put('exception', 'member info added successfully!!');
                return Redirect::to('/addmember');
         }
        }
        $data['member_image'] = $image_url;
                DB::table('members_tbl')->insert($data);
                Session::put('exception', 'member info added successfully!!');
                return Redirect::to('/addmember');

    DB::table('members_tbl')->insert($data);
    Session::put('exception', 'member info added successfully!!');
    return Redirect::to('/addmember');

     }
}
