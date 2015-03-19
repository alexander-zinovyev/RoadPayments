<?php namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\
use App\Account;

class MainController extends Controller {
	
	public function __construct() {
		$this->middleware('auth');
	}

	public function getIndex() {
		return view('cabinet/home', ['account' => Account::find($auth->user->accountId)]);
	}


}
