<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DivisionByZeroError;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public static function add($operatorA, $operatorB){
        $operatorA = floatval($operatorA);
        $operatorB = floatval($operatorB);
        return  [
            "Result" => $operatorA + $operatorB
        ];
    }

    public static function subtract($operatorA, $operatorB){
        $operatorA = floatval($operatorA);
        $operatorB = floatval($operatorB);
        return  [
            "Result" => $operatorA - $operatorB
        ];
    }

    public static function multiply($operatorA, $operatorB){
        $operatorA = floatval($operatorA);
        $operatorB = floatval($operatorB);
        return  [
            "Result" => $operatorA * $operatorB
        ];
    }

    public static function divide($operatorA, $operatorB){
        $operatorA = floatval($operatorA);
        $operatorB = floatval($operatorB);
        try{
            $result = $operatorA / $operatorB;
        }
        catch(DivisionByZeroError $e){
            $result = "Can't divide by 0.";
        }
        return  [
            "Result" => $result
        ];

    }
}
