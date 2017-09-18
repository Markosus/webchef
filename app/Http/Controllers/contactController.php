<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Classes\MathQuestion;
use App\Contact;
use Mail;
use Redirect;


class contactController extends Controller

{

	public $messages;

	public function __construct(){

   

	}

	public function display(){

		

		return view('contact',[
			'question' => Contact::getCaptchaQuestion(),
				]);



	}
    

    public function isValid(Request $request){

									
		eval( '$result = (' . $request->question . ');' );

		
    	$validator =  Validator::make($request->all(),Contact::$rules);
    	$this->messages = $validator->errors();

    	if ($result != intval($request->questioninput)){
 			
					
   			$this->messages->add('Captcha Question','Incorrect Captcha'); 
										
		}




    	if ($this->messages->count()){

    		
    			
			return redirect('/contact')
				->withInput($request->input())
				->withErrors($this->messages);

		} else {

			$this->sendEmail($request);

		}

		


    }


    public function sendEmail(Request $request){

    	//the actual message content is located in the email php file

    	
    	//this is any data sent to the emaillayout view
		 $data = array(
       	'sitename' 	=> "WebChef.ca",
       	'message'   => $request->message,
       	'emailto'	=> 'mark2002david@hotmail.com',
    		'emailfrom' => $request->email,
    		'Namefrom'	=> $request->name,
    		'subject'	=> 'WebChef contact form submission',
    		'body' 		=> $request->message,
  		  );

		//where the email layout file is --- the data being sent to the view 
    	Mail::send('email.emaillayout', $data, function ($message) use ($data) {

       		 $message->from($data['emailfrom'], $data['Namefrom']);

       		 $message->to($data['emailto'])->subject($data['subject']);

   		 });

    
     $this->success();
           
    }


    public function success(){

    

      notify()->flash("Email Sent.", "success");

      //return redirect('/');
      //return Redirect::to('/')
      Redirect::to('/')->send(); //the other redirect werent redirecting
      

    }


}



	

	
	

