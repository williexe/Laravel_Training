<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

class TransactionController extends Controller
{
    public function create()
    {
        return view('pages.transaction');
    }

    public function store (Request $request) {
        $data = $request->all();

        transaction::create([
            'name' => $data['name'],
            'transaction_number'=> $data['transaction_number'],
            'artkode' => $data['artkode'],
            'price' => $data['price'],
            'department'	=> $data['department'],
        ]);

        return view('pages.success');

    }
}
