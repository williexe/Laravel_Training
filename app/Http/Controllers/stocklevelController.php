<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stocklevelController extends Controller
{
    public function getLevel(){
         $stockLvl = '85%' ;

        return view('stocklevel', ['stocklvl' => $stockLvl]);
    }   
}
