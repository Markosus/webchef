<?php

Route::get('/', function () {
    return view('index');
});

Route::auth();

// Route::get('/home', 'HomeController@index');

Route::get('/contact', [
	'uses'=>'contactController@display',

]);

Route::post('/contact', [
	'uses'=>'contactController@isValid',

]);



Route::get('/register', function(){

	echo 'test';

});

Route::get('/login',function(){

	return view('/auth.login');

});

Route::get('/register',function(){

	return view('/auth.register');
});