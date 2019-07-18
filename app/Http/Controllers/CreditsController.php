<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Library\CreditEngine;

class CreditsController extends Controller
{
    //
    function create(Request $req){
        return view('credits.create');
    }
    function show(Request $req){
        //Primer forma para el simulador de creditos,mas recursos
        //Guardan los valores del formulario
        $plazo=$req->input('plazo');
        $monto=$req->input('monto');
        $tasa_anual=$req->input('tasa_anual');
        //Forma de mandar los valores de un formulario
        //return view('credits.show', ['plazo'  => $plazo, 'monto' => $monto, 'tasa_anual' => $tasa_anual]);

        //Segunda forma para el simulador de creditos,menos recursos
        //Forma de traer las variables de una clase
        $creditEngine = new CreditEngine($plazo, $monto, $tasa_anual);
        $results = $creditEngine->getResults();
        $plazo = $creditEngine->plazo;
        $monto = $creditEngine->monto;
        $tasaAnual = $creditEngine->tasaAnual;
        $tasaAnualCIVA = $creditEngine->tasaAnualCIVA;
        $tasaMensualSIVA = $creditEngine->tasaMensualSIVA;
        $tasaMensualCIVA = $creditEngine->tasaMensualCIVA;
        $pagoMensual = $creditEngine->pagoMensual;
        //Forma de mandar los valores de una clase
        return view('credits.show2', [
            'results' => $results, 
            'plazo' => $plazo,
            'monto'=>$monto,
            'tasaAnual'=>$tasaAnual, 
            'tasaAnualCIVA' => $tasaAnualCIVA,
            'tasaMensualSIVA'=>$tasaMensualSIVA,
            'tasaMensualCIVA'=>$tasaMensualCIVA,
            'pagoMensual'=>$pagoMensual,
        ]);
    }
}
