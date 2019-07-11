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
        return view('credits.show');
    }
    function store(Request $req){
        $credit->plazo=$req->input('Plazo');
        $credit->monto=$req->input('Monto');
        $credit->tasa_anual=$req->input('Tasa_anual');
        $credit->save();
        return redirect(route('credits.show'));
    }
}
