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
        return view('admin.nsuacm');
    }
}
