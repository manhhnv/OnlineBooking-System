<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenBay extends Model
{
    //
    protected $table = 'chuyenbay';
    protected $primaryKey = 'idChuyenBay';
    public $incrementing = false;
    public function LoTrinh()
    {
        return $this->belongsTo('App\LoTrinh', 'idLoTrinh', 'idChuyenBay');
    }
    public function HangBay()
    {
        return $this->belongsTo('App\HangBay', 'tenhang', 'idChuyenBay');
    }
}
