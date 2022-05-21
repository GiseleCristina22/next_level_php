<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function calc(String $operation, int $v1, int $v2)
    {
        switch($operation){
            case 'soma':
                $titulo = "Soma";
                $sign = '+';
                $result = $v1 + $v2;
                break;
            case 'subtrai':
                $titulo = "Subtração";
                $sign = '-';
                $result = $v1 - $v2;
                break;
            case 'multiplica':
                $titulo = "Multiplicação";
                $sign = 'X';
                $result = $v1 * $v2;
                break;
        }


        // return view("calc")->with('titulo', $titulo)->with('sign', $sign);

        return view("calc",
            [
                'titulo' => $titulo,  
                'sign' => $sign, 
                'v1' => $v1, 
                'v2' => $v2, 
                'result' => $result
            ]
        );
    }
}
