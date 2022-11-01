<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutputProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'output_id',
        'warehouse_product_id',
        'quantity'
    ];
}
