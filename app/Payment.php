<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = 'onlinepay';
    public $timestamps = false;
    
    public function User() {
        return $this->hasOne('App\User', 'IdCard');
    }
}
