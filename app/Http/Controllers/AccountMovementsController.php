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
        if ($req->input('movement.cantidad')> $account->saldo_actual){
            printf('ERROR:NO HAY SUFICIENTE DINERO.');
            return view('movements.retiro',['account'=>$account]);
        }
        else{
            $movement=$req->input('movement'); 
            Movement::create($movement);
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
        return view('movements.transfer',['account'=> $account ,'accounts'=> $accounts]);
    }
    
    function transferPost(Request $req,Account $account){//Se crea el movimiento de transferencia 
        $accounts=Account::all();
        //Se importan los valores del formulario
        $cantidad=$req->input('cantidad');
        $referencia=$req->input('referencia');
        //CUENTA 1 PARA EL RETIRO
        $account_id=$req->input('account_id');
        $holder_id=$req->input('holder_id');
        
        //Se aplica el retiro de la cuenta que transfiere.
        if ($cantidad > $account->saldo_actual){
            printf('ERROR:NO HAY SUFICIENTE DINERO.');
            return view('movements.transfer',['account'=> $account ,'accounts'=> $accounts]);
        }
        else{
            //Se crea como tal el movimiento de RETIRO en la DB
            $movement=new Movement;
            $movement->type='Retiro';
            $movement->cantidad=$cantidad;
            $movement->referencia=$referencia;
            $movement->account_id=$account_id;
            $movement->holder_id=$holder_id;
            $movement->save();
            $account->saldo_actual=$account->saldo_actual - $cantidad;
            $account->save();
            
        }

        //CUENTA 2 PARA ABONAR
        $account_id2=$req->input('account_id2');
        $acc=Account::find($account_id2);//Busca la cuenta2 que tenga el mismo account_id que se designo antes
        $holder_id2=$acc->holder_id;

        //Se crea como tal el movimiento de ABONO en la DB de la otra cuenta
        $movement2=new Movement;
        $movement2->type='Abono';
        $movement2->cantidad=$cantidad;
        $movement2->referencia=$referencia;
        $movement2->account_id=$account_id2;
        $movement2->holder_id=$holder_id2;
        $movement2->save();
        $acc->saldo_actual= $acc->saldo_actual + $cantidad;
        $acc->save();
        return redirect(route('holders.show',['holder'=>$account->holder])); 
    }
}