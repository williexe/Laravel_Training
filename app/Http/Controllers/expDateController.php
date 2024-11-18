<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class expDateController extends Controller
{
    public function getExpDate(){
        $expDate = '20240101';

       return view('expirydate', ['expDate' => $expDate]);
   }   
}
