<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

	protected $table = 'payments';

    protected $primaryKey = 'paymentId';

    protected $fillable = ['accountId', 'paymentId', 'date', 'status','summary','coins'];

}
