<?php

namespace App;
use Illuminate\Http\Request;

class Contact {

	public static $rules = [
		'name'=>'required | max:30',
    	'email' => 'required | email',
    	'message' => 'required',
    	// 'questioninput' => 'required | integer'

	];

	public static $capthaquestions = array(
				'5+5+5',
				'10-2+2',
				'15+5',
				'3+2+2'
				);

	public static function getCaptchaQuestion() {		
		
		return self::$capthaquestions[array_rand(self::$capthaquestions, 1)];

	}


}


