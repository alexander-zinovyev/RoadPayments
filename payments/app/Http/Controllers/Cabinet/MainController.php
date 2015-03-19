<?php namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Auth;
use App\Account;

class MainController extends Controller {
	
	public function __construct() {
		$this->middleware('auth');
	}

	public function getIndex() {
		return view('cabinet/home', ['account' => Account::find(Auth::user()->accountId)]);
	}


}
