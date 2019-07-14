<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditsController extends Controller
{
    //
    function create(Request $req){
        return view('credits.create');
    }
    function show(Request $req){
        return view('credits.show',['credit'=>$credit]);
    }
    function store(Request $req,$credit){
        $credit->plazo=$req->input('credit[plazo]');
        $credit->monto=$req->input('credit[monto]');
        $credit->tasa_anual=$req->input('credit[tasa_anual]');
        printf($credit);
        //$credit->save();
        return redirect(route('credits.show',['credit'=>$credit]));
    }
}
