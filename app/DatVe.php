<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatVe extends Model
{
    protected $table = 'datve';
    protected $primaryKey = 'orderID';
    public $timestamps = false;
    public function ChuyenBay()
    {
        return $this->belongsTo('App\ChuyenBay', 'idChuyenBay');
    }
    public function User()
    {
        return $this->belongsTo('App\User', 'IdCard', 'orderID');
    }
    //
}
