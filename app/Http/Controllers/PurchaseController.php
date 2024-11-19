<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purchase;

class PurchaseController extends Controller
{
    public function create()
    {
        return view('pages.purchase');
    }

    public function store (Request $request) {
        $data = $request->all();

        purchase::create([
            'invoice_number' => $data['invoice_number'],
            'transaction_number'=> $data['transaction_number'],
            'product_name' => $data['product_name'],
            'currency' => $data['currency'],
            'amount'	=> $data['amount'],
        ]);

        return view('pages.success');

    }
}
