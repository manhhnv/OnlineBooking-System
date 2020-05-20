<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HangBay extends Model
{
    protected $table = 'hangbay';
    protected $primaryKey = 'tenhang';
    public $incrementing = false;
    public function ChuyenBay()
    {
        return $this->hasMany('App\ChuyenBay', 'tenhang', 'tenhang');
    }
    public function Employee()
    {
        return $this->hasMany('App\AirlineEmployee', 'tenhang', 'tenhang');
    }
    //
}
