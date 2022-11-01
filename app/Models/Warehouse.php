<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'warehouse',
    //     'control_code'
    // ];

    //You may specify what you want to make not fillable instead of the contrary
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
