<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movement;
use App\Holder;
use App\Account;


class MovementsController extends Controller
{
    //
    function index(Request $req){  
        $movements=Movement::all();
        return view('movements.index',['movements'=>$movements]);
    }
    function create(Request $req){
        $holders=Holder::all();
        $accounts=Account::all();
        return view('movements.create',['accounts'=> $accounts ,'holders'=> $holders]);
    }
    function show(Request $req,Movement $movement){
        return view('movements.show',['movement'=>$movement]);
    }
    function store(Request $req,Account $account){
        //Arrays de todas las cuentas y los holders
        $accounts=Account::all();
        $holders=Holder::all();
        //Se busca el account para saber en que cuenta se realizara el movimiento
        $mm=Account::find($req->input('movement.account_id'));
        //Cuando el movimiento es un RETIRO
        if($req->input('movement.type') == 'Retiro'){
            if($req->input('movement.cantidad')> $mm->saldo_actual){
                printf('ERROR:NO HAY SUFICIENTE DINERO.'); 
                return view('movements.create',['accounts'=>$accounts ,'holders'=> $holders]);
            }else{
                //Se crea el movimiento
                $movement=$req->input('movement'); 
                Movement::create($movement);
                $mm->saldo_actual=$mm->saldo_actual - $req->input('movement.cantidad');
                $mm->save();
            }
        }
        //Cuando el movimiento es un ABONO
        if($req->input('movement.type') == 'Abono'){
            $movement=$req->input('movement'); 
            Movement::create($movement);
            $mm->saldo_actual= $mm->saldo_actual + $req->input('movement.cantidad');
            $mm->save();
        }
        return redirect(route('movements.index'));
    }

    function edit(Request $req,Movement $movement){
        return view('movements.edit',['movement'=>$movement]);
    }
    function update(Request $req,Movement $movement){
        $movement->type=$req->input('movement.type');
        $movement->cantidad=$req->input('movement.cantidad');
        $movement->referencia=$req->input('movement.referencia');
        $movement->save();
        return redirect(route('movements.show',['movement'=>$movement]));
    }
    function delete(Request $req,Movement $movement){
        $movement->delete();
        return redirect(route('movements.index'));
    }
}
