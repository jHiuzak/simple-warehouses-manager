<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;

    protected $fillable = [
        'move_status_id',
        'control_code'
    ];

    private const prefix = 's';

    public function setControlCodeAttribute()
    {
        $controlCode = $this->attributes['control_code'];
        $id = $this->attributes['id'];
        $prefix = $this->prefix;

        $controlCode = setControlCode($controlCode, $id, $prefix);
    }
}
