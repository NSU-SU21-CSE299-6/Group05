<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class nsuacmController extends Controller
{
    //
    public function nsuacm(){
        $nsuacmmember_info = DB::table('members_tbl')
                           ->where(['member_club'=>1])
                           -> get();
    
    


        $manage_member = view('admin.nsuacm')
                        -> with('nsuacm_member_info',$nsuacmmember_info);
        return view('layout')
                    -> with('nsuacm',$manage_member);
        return view('admin.nsuacm');
    }
}
