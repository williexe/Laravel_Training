<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice ;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = invoice::all();
        return view('invoices',['data'=>$data]);
    }

    public function create(){
        invoice::create([
            'title'=>'real madrid'
        ]);

        return view('invoices-create',['msg' => 'Successfully Created']);
    }
}
