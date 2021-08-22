<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class nsusscController extends Controller
{
    //
    public function nsussc(){
        $nsusscmember_info = DB::table('members_tbl')
        ->where(['member_club'=>4])
        -> get();

$manage_member = view('admin.nsussc')
     -> with('nsussc_member_info',$nsusscmember_info);
return view('layout')
 -> with('nsussc',$manage_member);
return view('admin.nsussc');
    }
}
