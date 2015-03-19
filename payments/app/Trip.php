<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model {

    protected $table = 'trips';

    protected $primaryKey = 'tripId';

    protected $fillable = ['accountId', 'tripId', 'type', 'coins'];


}
