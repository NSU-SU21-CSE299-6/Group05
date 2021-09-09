<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use APP\Http\Requests;
use Illuminate\Support\Str;
use DB;
use Session;
session_start();

class AllPresidentController extends Controller
{
    public function allpresident(){
    $all_president_info = DB::table('president_tbl')
                           -> get();
     $manage_president = view('admin.allpresident')
                        -> with('all_president_info',$all_president_info);
        return view('layout')
                    -> with('allpresident',$manage_president);
    }
    public function presidentview($president_id){

        $president_description_view=DB::table('president_tbl')
                        ->select('*')
                        ->where('president_id',$president_id)
                        ->first();
 
             //echo"</pre>";
             //print_r($president_description_view);
             //echo "</pre>";
         
          $manage_description_president=view('admin.presidentview')
                         ->with('president_description_profile',$president_description_view);
           return view('layout')
                     ->with('presidentview',$manage_description_president);
     }

     public function addpresident(){

        return view('admin.addpresident');
     }


     public function savepresident(Request $request){
        $data = array();
        $data['president_name'] = $request->president_name;
        $data['president_id'] = $request->president_id;
        $data['president_email'] = $request->president_email;
        $data['president_phone'] = $request->president_phone;
        $data['president_club'] = $request->president_club;
        $image=$request->file('president_image');
        if ($image){
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'iamge/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['president_image'] = $image_url;
                    DB::table('president_tbl')->insert($data);
                    Session::put('exception', 'President info added successfully!!');
                    return Redirect::to('/addpresident');
             }
            }
            $data['president_image'] = $image_url;
                DB::table('president_tbl')->insert($data);
                Session::put('exception', 'President info added successfully!!');
                return Redirect::to('/addpresident');

    DB::table('president_tbl')->insert($data);
    Session::put('exception', 'President info added successfully!!');
    return Redirect::to('/addpresident');

     }
}
