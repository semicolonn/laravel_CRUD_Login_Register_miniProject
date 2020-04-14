<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use Auth;

class regLoginController extends Controller
{



	//load the registeration page
    public function getIndex(){

    	return view('login-register.register');
    	//return 'Load register page here!';
    }

    	//load the login page
        public function openLogin(){

    	return view('login-register.login');
    	
    }


        //validation

    public function checklogin(Request $request)
        {
        $this->validate($request, [
        // 'username'   => 'required',
        // 'password'  => 'required|alphaNum|min:3'
        'username'   => 'required',
        'password'  => 'required'
        ]);



         $user_data = array(
          'name'  => $request->get('username'),
          'password' => $request->get('password')
         );

         if($user_data)
         {
            return redirect('/successlogin');
         }
         else
         {
            return back()->with('error', 'Wrong Login Details');
         }


    }

    public function successlogin()
    {
        return view('login-register.successlogin');
    }



    function logout()
    {
     Auth::logout();
     return redirect('/login');
    }

}
