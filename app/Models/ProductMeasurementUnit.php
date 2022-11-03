<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeasurementUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_measurement_unit'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
