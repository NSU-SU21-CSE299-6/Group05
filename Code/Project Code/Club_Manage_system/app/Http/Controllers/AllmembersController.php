<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AllmembersController extends Controller
{
    //
    public function allmember(){
        $allmember_info = DB::table('members_tbl')
                           -> get();
        $manage_member = view('admin.allmember')
                        -> with('all_member_info',$allmember_info);
        return view('layout')
                    -> with('allmember',$manage_member);
        //return view('admin.allmember');
    }


    public function memberdelete($member_id){
       DB::table('members_tbl')
                ->where('member_id',$member_id)
                ->delete();

                return Redirect::to('/allmember');
    }


    public function memberview($member_id){

       $member_description_view=DB::table('members_tbl')
                       ->select('*')
                       ->where('member_id',$member_id)
                       ->first();

            //echo"</pre>";
            //print_r($member_description_view);
            //echo "</pre>";
        
         $manage_description_member=view('admin.memberview')
                        ->with('member_description_profile',$member_description_view);
          return view('layout')
                    ->with('memberview',$manage_description_member);
    }


    public function memberedit($member_id){
        $member_description_view=DB::table('members_tbl')
                         ->select('*')
                        ->where('member_id',$member_id)
                         ->first();

             //echo"</pre>";
             //print_r($member_description_view);
             //echo "</pre>";

        $manage_description_member=view('admin.memberedit')
                          ->with('member_description_profile',$member_description_view);
        return view('layout')
                  ->with('memberedit',$manage_description_member);
 
                 return Redirect::to('/allmember');
     }

     public function memberupdate(Request $request,$member_id){

        $data=array();
        $data['member_name']=$request->member_name;
        $data['member_id']=$request->member_id;
        $data['member_fathername']=$request->member_fathername;
        $data['member_mothername']=$request->member_mothername;
        $data['member_email']=$request->member_email;
        $data['member_phone']=$request->member_phone;
        $data['member_address']=$request->member_address;
        $data['member_password']=$request->member_password;
        $data['member_club']=$request->member_club;
        $data['member_admissionyear']=$request->member_admissionyear;

        DB::table('members_tbl')
              ->where('member_id',$member_id)
              ->update($data);

           Session::put('exception','Member Updated Successfully') ;
           return Redirect::to('/allmember');  
     }



     
     public function updateownprofile(Request $request){

      $member_id=Session::get('member_id');
      $data=array();
      
     
      $data['member_email']=$request->member_email;
      
      $data['member_phone']=$request->member_phone;
     
      $data['member_password']=$request->member_password;
      
      
      DB::table('members_tbl')
            ->where('member_id',$member_id)
            ->update($data);

         Session::put('exception','Info Updated Successfully') ;
         return Redirect::to('/member_setting');  
   }

    
 

}

  