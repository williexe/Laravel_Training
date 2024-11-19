<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
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
