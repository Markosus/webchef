<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class templateController extends Controller
{

	public function index(){
		return view('generatetemplate.build');
	}

	public function build(){
		exec("ln -s /var/www/templatefiles/css /var/www/microsite");
	}
}