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



class TicketsController extends Controller
{



    public function home(){

        return view('index');
    }

    public function create(){

    	return view('tickets.create');

    }





    // this create ticket and store it to database laravel
    public function store(TicketFormRequest $request){

    	
    	$slug= uniqid();
    	$ticket= new Ticket(array(
    		'title'=> $request->get('title'),
    		'content' => $request->get('content'),
    		'slug' => $slug

    	));

    	$ticket->save();

    	return redirect('/tickets')->with('status','Your ticket has been created! Its unique id is:' .$slug);

    }


    //this function to view all the tickets registered in the app

    public function index(){


    	$tickets= Ticket::all();
    	return view('tickets.index', compact('tickets'));
        //return view('tickets.t');
    }


    // this function shows the ticket according to the slug id created in databse
    public function show($slug){

    	$ticket = Ticket::whereSlug($slug)->first();
    	return view('tickets.show', compact('ticket'));
    }

    	// this function edit the tickets

        public function edit($slug){

    	$ticket = Ticket::whereSlug($slug)->first();
    	return view('tickets.edit', compact('ticket'));
    }


    	//this function will update the ticket by the user

    	public function update($slug, TicketFormRequest $request){

    		$ticket= Ticket::whereSlug($slug)->first();
    		$ticket->title= $request->get('title');
    		$ticket->content= $request->get('content');

    		if($request->get('status') != null){
    			$ticket->status=0;

    		}else{
    			$ticket->status=1;

    		}
    		$ticket->save();

    		return redirect(action('TicketsController@index',$ticket->slug))->with('status','The ticket '.$slug.' has been update!');

    	}

    	public function destory($slug){

    		$ticket= Ticket::whereSlug($slug)->first();
    		$ticket->delete();
    		return redirect('/tickets')->with('status','The ticket '.$slug.' has been deleted!');
    	}




  


}
