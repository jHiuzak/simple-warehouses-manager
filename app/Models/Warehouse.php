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

    private const warehouse_prefix = 'x';

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
        $control_code = $this->attributes['control_code'];
        $id = $this->attributes['id'];
        $warehouse_prefix = $this->warehouse_prefix;

        $control_code = setControlCode($control_code, $id, $warehouse_prefix);
    }
}
