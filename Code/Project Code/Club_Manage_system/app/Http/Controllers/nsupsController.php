<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class nsupsController extends Controller
{
    //
    public function nsups(){
        $nsupsmember_info = DB::table('members_tbl')
                           ->where(['member_club'=>2])
                           -> get();
    
        $manage_member = view('admin.nsups')
                        -> with('nsups_member_info',$nsupsmember_info);
        return view('layout')
                    -> with('nsups',$manage_member);
        return view('admin.nsups');
    }
}
