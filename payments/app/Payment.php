<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

	const STATUS_PAID = 0;
	const STATUS_REFUND = 1;
	const STATUS_UNDER_REVIEW = 2;

	const REASON_CC_FRAUD = 2;
	const REASON_ORDER_FRAUD = 3;

	protected $table = 'payments';

    protected $primaryKey = 'paymentsId';

    protected $fillable = ['accountId', 'paymentsId', 'status', 'coins'];

}
