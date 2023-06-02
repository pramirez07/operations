<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public static function add($operatorA, $operatorB){
        return  [
            "Result" => $operatorA + $operatorB
        ];
    }

    public static function subtract($operatorA, $operatorB){
        return  [
            "Result" => $operatorA - $operatorB
        ];
    }

    public static function multiply($operatorA, $operatorB){
        return  [
            "Result" => $operatorA * $operatorB
        ];
    }

    public static function divide($operatorA, $operatorB){
        return  [
            "Result" => $operatorA / $operatorB
        ];
    }
}
