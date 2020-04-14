<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/','TicketsController@home');

Route::get('/about','PagesController@about');

//Route::get('/contact','PagesController@contact');

Route::get('/contact','TicketsController@create');
Route::post('/contact','TicketsController@store');

Route::get('/tickets','TicketsController@index');

Route::get('/tickets/{slug?}','TicketsController@show');

Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/tickets/{slug}/edit', 'TicketsController@update');

Route::post('/tickets/{slug?}/delete','TicketsController@destory');

Route::get('sendemail', function(){

	$data= array(
		'name' => "Learning Laravel",
	);
Mail::send('emails.welcome',$data, function($message){

	$message->from('edrisebaher@gmail.com','Learning Laravel');

	$message->to('edrisebaher@gmail.com')->subject('Learning Laravel test email');

});
	return "Your email has been sent successfully!";
});



Route::get('users/register','Auth\AuthController@getRegister');
Route::post('users/register','Auth\AuthController@postRegister');
Route::get('users/register','PagesController@home');

*/

//Another registeration practice by edrise

// if you type in browser url ---->>> 127.0.0.1/register you will redirect to below page 
Route::get('/','regLoginController@getIndex');
Route::get('/login','regLoginController@openLogin');


//Route::post('/checklogin', 'regLoginController@checklogin');
//Route::get('/successlogin', 'regLoginController@successlogin');
//Route::get('/logout', 'regLoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
