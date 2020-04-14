<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;
use App\Ticket;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use DB;
use Illuminate\Contracts\Auth\Authenticatable;
use Session;
use AuthenticatesAndRegistersUsers;


class authController extends Controller
{
    //login preview and process

      function login(){

        return view('tickets.custlogin');
      }


 //  public function loginprocess(Request $request){


  	
        


 // //    $username = $request->input('name');
 // //    //$password = md5($request->input('password'));
 // //    $password= $request->input('password');
    
	// // $data= DB::select('select * from users where name=? and password=?',[$username,$password]);

 // //    if(count($data)){

 // //    	print_r($data);
 // //    }





 //  }
public function loginprocess(Request $request){


	        $this->validate(request(), [
            'name' => 'required',
            'password' => 'required'
        ]);


		$username = $request->input('name');
		//$password = md5($request->input('password'));
		$password=$request->input('password');
		$user = DB::table('users')
				->where([
					['name', '=', $username],
					['password', '=', $password],
				])->first();
		
		if ($user) {

			
			$request->session()->put('sessUsername',$user);
			//print_r($request->session()->get('sessUsername'));

			//Session::put('username', $username);
			
			return redirect('/tickets');
		} else {
			$error = "Wrong username or password!";
            return redirect('/custlogin')->with('statusLoginError',$error);
		}
	}
	






// /register for the web
        public function register(){
        return view ('tickets.custregister');
    }

    public function storeForRegister(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        

        $user= new User(array(
            'name'=> $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),                      
        ));

        $user->save();
        
        return redirect('/custregister')->with('status','Your account has been created successfully!');
        
    }

    function logout(){

    	session()->flush();
    	return redirect('/custlogin');

    }
    protected $redirectTo='/custlogin';
}
