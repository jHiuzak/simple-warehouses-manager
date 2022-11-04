<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseProduct extends Model
{
    use HasFactory;

    protected $table='warehouses_products';

    protected $fillable = [
        'product_id',
        'warehouse_id',
        'quantity'
    ];

    public function entries()
    {
        return $this->belongsToMany(Entry::class, 'entries_products', 'warehouse_product_id');
    }

    public function outputs()
    {
        return $this->belongsToMany(Output::class, 'outputs_products', 'warehouse_product_id');
    }
}
