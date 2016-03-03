<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('rating', function () {
    return view('rating');
});

Route::get('json',function(){
    return view('json');
});

Route::post('testjson','AjaxController@ajaxResponse');
/*Route::post('testjson',function(){
   return response()->json(Request::input('_token'));
});

/*Route::get('fanexam', function () {
    return view('modalDiv');
});
/*
Route::get('contact',function(){
	return view('contact');
});
/*Route::get('test',function(){
	return view('test');
});*/
/*Route::get('share',function(){
	return view('facebookSharer');
});
Route::get('preview',function(){
	return view('preview');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    Route::get('/home', 'HomeController@index');
    route::get('test','HomeController@test');
    Route::get('contact','HomeController@contact');
    Route::get('share','HomeController@share');
    Route::get('preview','HomeController@preview');

    Route::get('/preview2','HomeController@preview2');
    Route::get('/write', 'HomeController@write');

    
});
