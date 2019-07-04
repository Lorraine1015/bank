<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = [
        'name' , 'no_cuenta' , 'saldo_actual' , 'holder_id'
    ];
    public function holder(){
        return $this->belongsTo('App\Holder');
    }
    public function movements(){
        return $this->hasMany('App\Movement');
    }
}
