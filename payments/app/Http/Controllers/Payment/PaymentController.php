<?php namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Auth;

class PaymentController extends Controller {
	
	public function __construct() {
		//Including paymentwall API library
		require_once('../../../Libraries/paymentwall/lib/paymentwall.php');
		Paymentwall_Base::setApiType(Paymentwall_Base::API_VC);
		Paymentwall_Base::setAppKey('466763feb82b45c143d242766801cd53');
		Paymentwall_Base::setSecretKey('d651224470f8ca9dba95de33e9cd2147');
	}

	public function getIndex() {
		$widget = new Paymentwall_Widget(
			Auth::user()->email,
			'p10_1',
			array(),
			array('email' => 'my@email.com')
		);
		return view('payment/payment', ['widget' => $widget]);
	}

}
