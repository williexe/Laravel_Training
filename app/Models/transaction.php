<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
        'name',
        'transaction_number',
        'artkode',
        'price',
        'department',
    ];
}

