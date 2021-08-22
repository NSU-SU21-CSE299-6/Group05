<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class nsuieeeController extends Controller
{
    //
    public function nsuieee(){
        $nsuieeemember_info = DB::table('members_tbl')
                           ->where(['member_club'=>3])
                           -> get();
    
    


        $manage_member = view('admin.nsuieee')
                        -> with('nsuieee_member_info',$nsuieeemember_info);
        return view('layout')
                    -> with('nsuieee',$manage_member);
        return view('admin.nsuieee');
    }
}
