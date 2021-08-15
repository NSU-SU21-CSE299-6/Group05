<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class club_president_profileController extends Controller
{
    //
    public function presindentprofile(){
        return view('admin.presidentprofile');
    }
}
