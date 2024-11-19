<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->all();

        Profile::create([
            'first_name' => $data['first-name'],
            'last_name' => $data['last-name'],
        ]);
    }
   
}
