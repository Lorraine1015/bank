<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Library\CreditEngine;
use App\Holder;
use App\Account;
use App\Movement;
use DB;
use Carbon\Carbon;//Clase de framework
use App\Credit;


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
    function peticion(Request $req,Holder $holder){
        return view('holders.peticion',['holder'=>$holder]);
    }
    function credito(Request $req,Holder $holder){
        $monto=$req->input('monto');
        $mensualidad=$req->input('mensualidad');
        $tasa=$req->input('tasa');
        $mensCiva=.0574;
        $interes= (1 + $mensCiva)** $mensualidad;
        $monto_mensual=$mensCiva * - $monto * $interes / (1- $interes);
        
        $movement = DB::table('movements')//BUSQUEDA DE LOS ABONOS TOTALES DEL HOLDER
                //->whereMonth('created_at','7')Condicion de creacion de mes determinado
                ->whereMonth('created_at','=', Carbon::now()->month)//Condicion donde se usa de parametro el mes actual con el framework
                ->where('type','Abono')
                ->where('holder_id',[$holder->id])
                ->sum('cantidad');
        if($movement>=$monto_mensual*2){//CONDICION QUE SE REQUIERE PARA LA ACEPTACION DEL CREDITO
            $credit=[//ARRAY DONDE SE LE COLOCAN LOS DATOS A GUARDAR
                'monto'=>$monto,
                'monto_mensual'=>$monto_mensual,
                'tasa'=>$tasa,
                'mensualidad'=>$mensualidad,
                'holder_id'=>$holder->id,
            ];
            Credit::create($credit);//CREA EL CREDITO 
            printf('APROBADO');
        }else{
            printf('NO ES APTO PARA EL CREDITO');
            return view('holders.peticion',['holder'=>$holder]);
        }
        
        //$movement = DB::table('movements')->where('name', 'Daniel')->value('lastname');
        //$movement = DB::table('accounts')->sum('saldo_actual');
        //$movement=Movement::whereMonth('created_at','07')->where('type','Abono')->select("type","cantidad")->get();
        //Obtener el registro de un holder con mes de registro 07
        /*Consulta de las cuentas con sus movimientos creadas segun el mes indicado
        $month = 07; 
        $account = Account::with(['movements' => function($query) use ($month) {
            $query->whereMonth('created_at', $month);
        }])->get();
        */
        return view('holders.credito', [
            'monto' => $monto,
            'mensualidad' => $mensualidad,
            'tasa' => $tasa,
            'monto_mensual' => $monto_mensual ,
            'movement' => $movement,
            'holder' => $holder,
            'credit' => $credit]);//VARIABLES QUE SE MANDAN PARA LA VISTA
    }

}
