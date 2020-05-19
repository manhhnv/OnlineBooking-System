<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LoTrinh;
use Illuminate\Support\Facades\DB;
class PlaneModel extends Model
{
    protected $table = 'chuyenbay';
    protected $primaryKey = 'idChuyenBay';
    public $incrementing = false;
    //
    public static function searchPlane($idLoTrinh, $date) {
        $result = DB::table('chuyenbay')->where([['idLoTrinh', '=', $idLoTrinh], ['ngaybay', '=', $date]])->get();
        return $result;
    }
}
    