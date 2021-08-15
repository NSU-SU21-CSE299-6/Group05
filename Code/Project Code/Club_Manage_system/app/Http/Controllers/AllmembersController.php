<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllmembersController extends Controller
{
    //
    public function addmember(){
        return view('admin.allmember');
    }
}
