<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    protected $table = 'price';

    protected $fillable = [
        'currency',
        'value',
        'amount',
        'total',
        'amount',
    ];
}
