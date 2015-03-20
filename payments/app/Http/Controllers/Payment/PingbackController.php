<?php namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Payment;
use App\Account;
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
			$payment = Payment::find($pingback->getReferenceId());
			if ($payment == null) {
				//first time
				$payment = Payment::create([
					'accountId' => $pingback->getUserId(),
					'paymentsId' => $pingback->getReferenceId(),
					'coins' => $coins
				]);
				if ($pingback->isDeliverable()) {
					$payment->status = Payment::STATUS_PAID;
					$payment->save();

					$account = Account::find($request->input('uid'));
					$account->balance += $coins;
					$account->save();
				} else if ($pingback->isCancelable()) {
					$payment->status = Payment::STATUS_REFUND;
					$payment->save();

					$account = Account::find($request->input('uid'));
					$account->balance += $coins;
					$account->save();

					//recommendations
					if ($pingback->reason == Payment::REASON_CC_FRAUD
						|| $pingback->reason == Payment::REASON_ORDER_FRAUD) {
						//ban user
					}
				} else {
					$payment->status = Payment::STATUS_UNDER_REVIEW;
					$payment->save();
				}
			} else {
				if ($pingback->isDeliverable() && $payment->status != Payment::STATUS_PAID) {
					$payment->status = Payment::STATUS_PAID;
					$payment->save();

					$account = Account::find($request->input('uid'));
					$account->balance += $coins;
					$account->save();
				} else if ($pingback->isCancelable() && $payment->status != Payment::STATUS_REFUND) {
					$payment->status = Payment::STATUS_REFUND;
					$payment->save();

					$account = Account::find($request->input('uid'));
					$account->balance += $coins;
					$account->save();

					//recommendations
					if ($pingback->reason == Payment::REASON_CC_FRAUD
						|| $pingback->reason == Payment::REASON_ORDER_FRAUD) {
						//ban user
					}
				}
			}
			return 'OK';
		} else {
			return view('payment/error')->withMessage($pingback->getErrorSummary());
		}
	}
}