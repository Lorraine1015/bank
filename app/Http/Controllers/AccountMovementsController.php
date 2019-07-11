<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Movement;


class AccountMovementsController extends Controller
{
    //
    function makeretiro(Request $req,Account $account){
        return view('movements.retiro',['account'=>$account]);
    }
    function retiro(Request $req,Account $account){
        $movement=$req->input('movement'); 
        Movement::create($movement);
        if ($req->input('movement.cantidad')> $account->saldo_actual){
            printf('ERROR:NO HAY SUFICIENTE DINERO.');
            return view('movements.retiro',['account'=>$account]);
        }
        else{
            $account->saldo_actual=$account->saldo_actual - $req->input('movement.cantidad');;
            $account->save();
            return redirect(route('holders.show',['holder'=>$account->holder]));
        }
    }
    function makeabono(Request $req,Account $account){
        return view('movements.abono',['account'=>$account]);
    }
    function abono(Request $req,Account $account){
        $movement=$req->input('movement'); 
        Movement::create($movement);
        $account->saldo_actual= $account->saldo_actual + $req->input('movement.cantidad');
        $account->save();
        return redirect(route('holders.show',['holder'=>$account->holder]));
    }
    
}