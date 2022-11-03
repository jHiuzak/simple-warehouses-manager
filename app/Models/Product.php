<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_measurement_unit_id',
        'product',
        'control_code'
    ];

    public function product_measurement_unit()
    {
        return $this->hasMany(ProductMeasurementUnit::class, 'id', 'product_measurement_unit_id');
    }
}
