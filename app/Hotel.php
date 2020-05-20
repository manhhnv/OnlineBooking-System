<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $table = 'hotel';
    protected $primaryKey = 'hotelID';
    public $incrementing = false;
    public $timestamps = false;
    public function DatPhong(){
        return $this->hasMany('App\DatPhong', 'hotelID', 'hotelID');
    }
}
