<?php

Route::get('/', function () {
    return view('index');
});

Route::auth();

// Route::get('/home', 'HomeController@index');

Route::get('/contact', function(){

	echo 'test';

});

Route::get('/register', function(){

	echo 'test';

});
