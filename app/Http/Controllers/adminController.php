<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests;



// User::where('id','!=',$currentUser->id)->get();
// User::where('id','=', $id)->first();
// User::find($id);
// User::all();
// User::all('name');
// User::all()->except(Auth::id());
// User::findOrFail(11);

// foreach ($userlist as $user){

//     echo $user->name.'<br>';
// }

class adminController extends Controller
{
    public function showPanel(){

    	return view('admin.adminpanel');

    }

    public function viewAccounts(){

    	$userlist = User::all();

    	foreach ($userlist as $user){

    		//echo "<a href='$user->id'> ".$user->name.'<br></a>';
    	}

    	return view('admin.admin_viewaccounts',[
    	   'clients' => $userlist,
    	]);

    }

    public function viewClient($id){

    	//$useraccount = User::where('id','=',$id)->first();
    	// $useraccount = User::find($id);
    	//echo $useraccount->name;
        $useraccount = User::findOrFail($id);

    	return view('admin.admin_clientprofile',[

    		'userprofile' => $useraccount,

    		]);



    	


    }
}
