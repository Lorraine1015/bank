<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Movement;
use App\Holder;


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
    function maketransfer(Request $req,Account $account){//Formulario para crear una transferencia
        $accounts=Account::all();
        $holders=Holder::all();
        return view('movements.transfer',['account'=> $account],['accounts'=> $accounts],['holders'=> $holders]);
    }
    
    function transferPost(Request $req,Account $account){//Se crea el movimiento de transferencia 
        //Se importan los valores del formulario
        $cantidad=$req->input('cantidad');
        $referencia=$req->input('referencia');
        $account_id=$req->input('account_id');
        $acc=Account::find($account_id);//Busca la cuenta que tenga el mismo account_id que se designo antes
        $holder_id=$acc->holder_id;
        //Se crea como tal el movimiento de retiro en la DB
        $movement=new Movement;
        $movement->type='Retiro';
        $movement->cantidad=$cantidad;
        $movement->referencia=$referencia;
        $movement->account_id=$account_id;
        $movement->holder_id=$holder_id;
        $movement->save();
        //Falta aplicar el retiro de la cuenta que transfiere.

    }
}