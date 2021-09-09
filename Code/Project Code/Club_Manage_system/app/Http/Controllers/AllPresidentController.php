<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
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
}
