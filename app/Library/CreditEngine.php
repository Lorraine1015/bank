<?php

namespace App\Library;

class CreditEngine {
//Otra forma de manejar la estructura->optimizacion mas eficiente
//Public function es para un acceso ilimitado  y private function es para tener un limite en el uso de las funciones

    public $results = [];//Se declara un arreglo donde se guardaran los valores de los calculos

    function __construct($plazo, $monto, $tasaAnual) {//Se colocan las caracteristicas del objeto
        $this->plazo = $plazo;
        $this->monto = $monto;
        $this->tasaAnual = $tasaAnual;
        $this->calcTasaAnualCIVA();
        $this->calcTasaMensualSIVA();
        $this->calcTasaMensualCIVA();
        $this->calcTasaMensual();
        $this->calcPagoMensual();
    }
//Funciones de los calculos de datos base,o datos globales
    private function calcTasaAnualCIVA() {
        $this->tasaAnualCIVA = $this->tasaAnual * 1.16;
    }

    private function calcTasaMensualSIVA() {
        $this->tasaMensualSIVA = $this->tasaAnual / 12;
    }

    private function calcTasaMensualCIVA() {
        $this->tasaMensualCIVA = $this->tasaAnualCIVA / 12;
    }

    private function calcTasaMensual() {
        $this->tasaMensual = ($this->tasaMensualCIVA / 100 );
    }

    private function calcPagoMensual() {
        $interes = (1 + $this->tasaMensual) ** $this->plazo;
        $this->pagoMensual = $this->tasaMensual * -$this->monto * $interes / (1 - $interes);
    }
//Funcion donde se coloca los datos dentro del arreglo
    private function prefillResults() {
        for ($i = 0; $i < $this->plazo; $i++) {
            $this->results[] = [
                'plazo' => ($i + 1),
                'saldo_insoluto' => 0,
                'pago_mensual' => $this->pagoMensual,
                'capital' => 0,
                'intereses' => 0,
                'iva' => 0,
            ];
        }
    }
//Funcion donde se calculan todos los datos de la tabla
    private function calcResults() {
        for ($i = 0; $i < $this->plazo; $i++) {
            $result = $this->results[$i];
            if ($result['plazo'] == 1) {
                $result['intereses'] = $this->tasaMensualSIVA / 100 * $this->monto;
                $result['iva'] = $result['intereses'] * 0.16;
                $result['capital'] = $this->pagoMensual - $result['intereses'] - $result['iva'];
                $result['saldo_insoluto'] = $this->monto - $result['capital'];
            } else {
                $result['intereses'] = $this->tasaMensualSIVA / 100 * $this->results[$i - 1]['saldo_insoluto'];
                $result['iva'] = $result['intereses'] * 0.16;
                $result['capital'] = $this->pagoMensual - $result['intereses'] - $result['iva'];
                $result['saldo_insoluto'] =  $this->results[$i - 1]['saldo_insoluto']- $result['capital'];
            }
            $this->results[$i] = $result;
        }
    }
//Funcion donde se guardan las funciones relacionadas para el arreglo
    public function getResults() {
        $this->prefillResults();
        $this->calcResults();
        return $this->results;
    }
}
