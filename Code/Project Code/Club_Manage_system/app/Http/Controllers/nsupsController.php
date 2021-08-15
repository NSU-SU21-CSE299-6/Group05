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
        return view('admin.nsups');
    }
}
