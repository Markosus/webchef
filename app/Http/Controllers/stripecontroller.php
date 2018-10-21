<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;


use App\Http\Requests;

class stripecontroller extends Controller
{
    public function index() {



    	return view('stripe.stripeform');
    }

    public function store(){

    		// dd(request()->all());

    			// dd(config('services.stripe.secret'));

    		Stripe::setApiKey(config('services.stripe.secret'));

    		$customer = Customer::create([
    			'email'=>request('stripeEmail'),
    			'source'=>request('stripeToken')
    			]);

    		Charge::create([
    				'customer'=> $customer->id,	
    				'amount' => 2500,
    				'currency'=>'cad',
    			]);

    		return "All done";
    		
    }
}
