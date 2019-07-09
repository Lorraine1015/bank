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
    function makeabono(Request $req,Account $account){
        return view('movements.abono',['account'=>$account]);
    }
    function abono(Request $req,Account $account){
        $account->saldo_actual= $account->saldo_actual + $req->input('movement.cantidad');
        $account->save();
        return redirect(route('holders.show',['holder'=>$account->holder]));
    }
    
}