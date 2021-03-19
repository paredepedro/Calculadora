<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    function menu(){
        return view("menu");
    }
    
    function soma(){
        return view("soma");
    }
    function sub(){
        return view("subtracao");
    }
    function mult(){
        return view("multiplicacao");
    }
    function div(){
        return view("divisao");
    }


    function somar(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 + $valor2;

        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
    function subtrair(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 - $valor2;

        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
    function multiplicar(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 * $valor2;

        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
    function dividir(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 / $valor2;

        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
    
}
