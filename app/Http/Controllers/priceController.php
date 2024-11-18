<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class priceController extends Controller
{

    public function getPrices(){
         $price = '4.55' ;

        return view('price', ['price' => $price]);
    }   
}
