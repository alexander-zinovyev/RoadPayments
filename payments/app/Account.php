<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	protected $table = 'accounts';

	protected $primaryKey = 'accountId';

	protected $fillable = ['accountId', 'balance'];
}
