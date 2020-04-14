<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testCont extends Controller
{
    function runtest(){
    	return view('test');
    }

    function login(){
    	return view('auth.login_');
    }
}
