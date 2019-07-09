<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Movement;


class AccountMovementsController extends Controller
{
    //
    function retiro(Request $req,$account){
        if ('account.cantidad'>'account.saldo_actual'){
            printf('Error:No hay suficiente dinero');
        }
        else{
            $saldo_ac='account.saldo_actual'-'account.saldo_actual';
            save();
        }
    }
    function abono(Request $req,Account $account){
        $saldo_act='account.saldo_actual'= 'account.cantidad';
        save();
    }
}