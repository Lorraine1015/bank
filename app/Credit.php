<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    //
    protected $fillable = [
        'monto' , 'monto_mensual', 'tasa', 'mensualidad'  
    ];
}
