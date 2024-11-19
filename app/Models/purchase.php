<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table = 'purchase';

    protected $fillable = [
        'invoice_number',
        'transaction_number',
        'product_name',
        'currency',
        'amount',
    ];
}

