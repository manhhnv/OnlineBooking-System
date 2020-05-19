<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class LoTrinh extends Model
{
    protected $table = 'lotrinh';
    protected $primaryKey = 'idLoTrinh';
    public $incrementing = false;

    public static function getID($start, $end) {
        $lotrinh = DB::table('lotrinh')->where([['start', '=', $start], ['end', '=', $end]])->get();
        return $lotrinh;
    }
    public function ChuyenBay()
    {
        return $this->hasMany('App\ChuyenBay', 'idLoTrinh', 'idLoTrinh');
    }
}
