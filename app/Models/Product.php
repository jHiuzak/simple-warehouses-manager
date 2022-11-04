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

    private const prefix = 'p';

    public function setControlCodeAttribute()
    {
        $controlCode = $this->attributes['control_code'];
        $id = $this->attributes['id'];
        $prefix = $this->prefix;

        $controlCode = setControlCode($controlCode, $id, $prefix);
    }

    public function productMeasurementUnit()
    {
        return $this->belongsTo(ProductMeasurementUnit::class);
    }

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class, 'warehouses');
    }

    public function entriesProducts()
    {
        return $this->hasMany(EntryProduct::class);
    }
}
