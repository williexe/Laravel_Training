<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function showFirst(){

       return view('first-view');
   }   
}
