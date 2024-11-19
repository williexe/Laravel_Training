<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondController extends Controller
{
    public function showSecond(){

       return view('second-view');
   }   
}
