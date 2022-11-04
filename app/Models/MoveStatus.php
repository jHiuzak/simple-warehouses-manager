<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoveStatus extends Model
{
    use HasFactory;

    protected $table='moves_statuses';

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }

    public function outputs()
    {
        return $this->hasMany(Outputs::class);
    }
}
