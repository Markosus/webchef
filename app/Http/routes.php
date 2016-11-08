<?php

// Route::get('/', function () {
//     return view('index');
// });

Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/contact', 'contactController@display');

Route::post('/contact', [
	'uses'=>'contactController@isValid',

]);

Route::get('/myprojects', function(){

	return view('/myprojects');

});

Route::get('/portfolioliberated', function(){
	return view('/portfolioliberated');
});

Route::get('/portfoliograceful', function(){
	return view('/portfoliograceful');
});


Route::get('/login',function(){

	return view('/auth.login');

});

Route::group(['middleware' =>['admin']],function(){ //admin user

	Route::get('/register',function(){

		return view('/auth.register');
		
	});

	Route::get('/admin',['as' => 'adminpanel', 'uses'=>'admincontroller@showPanel']);

	Route::get('/viewaccounts', ['as' => 'viewaccounts', 'uses' => 'admincontroller@viewAccounts' ]);

	Route::get('/user/{id}', ['as' => 'profile', 'uses' => 'admincontroller@viewClient']); 

});

Route::group(['middleware' => ['auth']], function(){  //regular user 

	// route::get('logout', ['as' => 'logout', 'uses' => ])
	route::get('areyouloggedin',function(){

		echo "You are a regular user";

	});
});