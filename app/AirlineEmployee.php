<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirlineEmployee extends Model
{
    //
    protected $table = 'airlineemployee';
    protected $primaryKey = 'manv';
    public $incrementing = false;
    public function HangBay()
    {
        return $this->belongsTo('App\HangBay', 'tenhang', 'manv');
    }
}
