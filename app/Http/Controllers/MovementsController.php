<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movement;
use App\Account;

class MovementsController extends Controller
{
    //
    function index(Request $req){
        $movements=Movement::all();
        return view('movements.index',['movements'=>$movements]);
    }
    function create(Request $req){
        $accounts=Account::all(); 
        return view('movements.create',['accounts'=> $accounts]);
    }
    function show(Request $req,Movement $movement){
        return view('movements.show',['movement'=>$movement]);
    }
    function store(Request $req){
        $movement=$req->input('movement');
        Movement::create($movement);
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
