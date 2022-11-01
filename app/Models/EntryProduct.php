<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry_id',
        'product_id',
        'warehouse_product_id',
        'quantity'
    ];
}
