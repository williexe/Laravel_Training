<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customersController extends Controller
{

    public function getCustomers(){
         $customer = 'Willie Manders' ;

        return view('customers', ['customer' => $customer]);
    }   
}
