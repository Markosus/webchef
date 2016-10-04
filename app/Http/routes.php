<?php

Route::get('/', function () {
    return view('index');
});

Route::auth();

// Route::get('/home', 'HomeController@index');

Route::get('/contact', [
	'uses'=>'contactController@display'

	]


});

Route::get('/register', function(){

	echo 'test';

});
