<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryProduct extends Model
{
    use HasFactory;

    protected $table='entries_products';

    protected $fillable = [
        'entry_id',
        'product_id',
        'warehouse_product_id',
        'quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
