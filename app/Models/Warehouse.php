<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'warehouse',
    ];

    private const prefix = 'x';

    //You may specify what you want to make not fillable instead of the contrary
    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at'
    // ];

    // public function makeControlCode($id)
    // {

    // }

    public function setControlCodeAttribute()
    {
        $controlCode = $this->attributes['control_code'];
        $id = $this->attributes['id'];
        $prefix = $this->prefix;

        $controlCode = setControlCode($controlCode, $id, $prefix);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'warehouses_products');
    }

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}
