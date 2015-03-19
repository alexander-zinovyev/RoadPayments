<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model {

    protected $table = 'withdraws';

    protected $primaryKey = 'paymentId';

    protected $fillable = ['accountId', 'accountId', 'date'];



}
