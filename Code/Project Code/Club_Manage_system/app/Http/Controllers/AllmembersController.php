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
}
