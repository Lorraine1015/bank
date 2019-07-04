<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holder extends Model
{
    //
    protected $fillable = [
        'name' , 'lastname'
    ];
    public function accounts(){
        return $this->hasMany('App\Account');
    }
}
