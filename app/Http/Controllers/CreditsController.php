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
        //Guardan los valores del formulario
        $plazo=$req->input('plazo');
        $monto=$req->input('monto');
        $tasa_anual=$req->input('tasa_anual');
        //Forma de mandar los valores de un formulario
        return view('credits.show', ['plazo'  => $plazo, 'monto' => $monto, 'tasa_anual' => $tasa_anual]);
    }
}
