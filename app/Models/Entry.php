<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'move_status_id',
        'control_code'
    ];

    private const prefix = 'e';

    public function setControlCodeAttribute()
    {
        $controlCode = $this->attributes['control_code'];
        $id = $this->attributes['id'];
        $prefix = $this->prefix;

        $controlCode = setControlCode($controlCode, $id, $prefix);
    }

    public function moveStatus()
    {
        return $this->belongsTo(MoveStatus::class);
    }

    public function warehousesProducts()
    {
        return $this->belongsToMany(WarehouseProduct::class, 'warehouses_products');
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
