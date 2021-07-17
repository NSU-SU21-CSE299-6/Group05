<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('student_login');
});
Route::get('/backend', function(){
    return view('admin.admin_login');
});