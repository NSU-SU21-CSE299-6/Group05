<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class profileController extends Controller
{
    //
    public function memberprofile(){
        return view('admin.memberprofile');
    }

    public function perticipatedevent(){
        return view('admin.events');
    }
}
