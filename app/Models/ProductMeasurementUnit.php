<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeasurementUnit extends Model
{
    use HasFactory;

    protected $table='products_measurement_units';

    protected $fillable = [
        'product_measurement_unit'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_measurement_unit_id');
    }
}
