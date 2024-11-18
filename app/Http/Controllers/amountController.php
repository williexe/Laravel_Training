<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class amountController extends Controller
{

    public function getAmount(){
         $amount = '4' ;

        return view('amount', ['amount' => $amount]);
    }   
}
