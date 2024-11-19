<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\price;

class priceController extends Controller
{
    public function create()
    {
        return view('pages.price');
    }

    public function store (Request $request) {
        $data = $request->all();

        price::create([
            'currency' => $data['currency'],
            'value'=> $data['value'],
            'amount' => $data['amount'],
            'total' => $data['value'] * $data['amount'],
        ]);

        return view('pages.success');

    }
}
