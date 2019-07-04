<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    //
    protected $fillable = [
        'cantidad' , 'referencia' , 'account_id'
    ];
    public function account(){
        return $this->belongsTo('App\Account');
    }
}
