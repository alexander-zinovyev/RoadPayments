<?php namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Payment;
use App\Account;
use Auth;
use Illuminate\Http\Request;

//PaymentWall API classes
use Paymentwall_Base;
use Paymentwall_Widget;
use Paymentwall_Pingback;
use Paymentwall_Signature_Pingback;

class PingbackController extends Controller {
	public function __construct() {
		Paymentwall_Base::setApiType(Paymentwall_Base::API_VC);
		Paymentwall_Base::setAppKey('466763feb82b45c143d242766801cd53');
		Paymentwall_Base::setSecretKey('d651224470f8ca9dba95de33e9cd2147');
	}

	public function index(Request $request) {
		$pingback = new Paymentwall_Pingback($request->all(), $request->ip());
		if ($pingback->validate(true)) {
			//check signature
			$signatureModel = new Paymentwall_Signature_Pingback();
			$signature = $signatureModel->calculate($request->all(), $request->input('sign_version'));
			if ($request->input('sig') != $signature) {
				return view('payment/error')->withMessage('signature error');
			}

			$coins = $pingback->getVirtualCurrencyAmount();
			$payment = Payment::find([
				'accountId' => Auth::user()->accountId,
				'paymentsId' => $pingback->getReferenceId(),
			]);
			if ($pingback->isUnderReview()) {
				$payment->status = Payment::STATUS_UNDER_REVIEW;
				$payment->coins = $coins;
			}
			else {
				if ($pingback->isDeliverable()) {
					if ($payment->status == Payment::STATUS_PAID)	return 'OK';
					$payment->status = Payment::STATUS_PAID;
					$payment->coins = $coins;
				} else {
					if ($payment->status == Payment::STATUS_REFUND)	return 'OK';
					$payment->status = Payment::STATUS_REFUND;
					$payment->coins = -$coins;

					//recommendations
					if ($pingback->reason == Payment::REASON_CC_FRAUD
						|| $pingback->reason == Payment::REASON_ORDER_FRAUD) {
						//ban user
					}
				}
				$account = Account::find(Auth::user()->accountId);
				$account->balance += $coins;
				$account->save();
			}
			$payment->save();
			return 'OK';
		} else {
			return view('payment/error')->withMessage($pingback->getErrorSummary());
		}
	}
}