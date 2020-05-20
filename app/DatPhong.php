<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatPhong extends Model
{
    //
    protected $table = 'datphong';
    protected $primaryKey = 'orderID';
    public $timestamps = false;
    public function Hotel() {
        return $this->belongsTo('App\Hotel', 'hotelID');
    }
    public function User() {
        return $this->belongsTo('App\User', 'IdCard');
    }
}
