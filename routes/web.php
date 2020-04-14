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

Route::get('/','PagesController@home');


Route::get('/','TicketsController@home');

Route::get('/about','PagesController@about');

//Route::get('/contact','PagesController@contact');

Route::get('/contact','TicketsController@create')->middleware('custAuth');
Route::post('/contact','TicketsController@store');

Route::get('/tickets','TicketsController@index')->middleware('custAuth');

Route::get('/tickets/{slug?}','TicketsController@show');

Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/tickets/{slug}/edit', 'TicketsController@update');

Route::post('/tickets/{slug?}/delete','TicketsController@destory');



Route::get('/custregister','authController@register');
Route::post('/custregister','authController@storeForRegister');

Route::get('/custlogin','authController@login');
Route::post('/custlogin','authController@loginprocess');


// Route::group(['middleware' => ['custAuth']], function(){

// 	return redirect('/tickets');
// });

Route::get('/logout','authController@logout');