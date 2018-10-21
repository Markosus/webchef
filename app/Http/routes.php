
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



Route::get('/generate', [
    'uses' => 'templateController@index'
  ]);

Route::get('/generate/build', [
    'uses' => 'templateController@build'
  ]);


// Route::get('/login',function(){

// 	return view('/auth.login');

// });

// Route::group(['middleware' =>['myadmin']],function(){ //admin user

// 	Route::get('/register',function(){

// 		return view('/auth.register');
		
// 	});

// 	Route::get('/adminpanel',['as' => 'adminpanel', 'uses'=>'admincontroller@showPanel']);

// 	Route::get('/viewaccounts', ['as' => 'viewaccounts', 'uses' => 'admincontroller@viewAccounts' ]);

// 	Route::get('/user/{id}', ['as' => 'profile', 'uses' => 'admincontroller@viewClient']); 

// });

//this authentication should be seperate from the admin auth area.
Route::group(['middleware' => ['auth']], function(){  //regular user 

	// route::get('logout', ['as' => 'logout', 'uses' => ])
	route::get('areyouloggedin',function(){

		echo "You are an authenticated user";

	});
});

Route::get('/register2',function(){

		return view('/auth.register');
		
	});

Route::get('game', function(){
	return view('game.gameindex');
});





// Route::get('/notify',function(){  this is taken care of in the contact controller
// 	notify()->flash("Good job!", "success");
// 	return redirect('/');
// });
/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
