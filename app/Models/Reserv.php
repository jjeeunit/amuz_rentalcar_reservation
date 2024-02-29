<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserv extends Model
{
    use HasFactory;

    protected $fillable = [
        'rpossible'
    ];


    public function cars()
    {
        return $this->belongsTo(Car::class);
    }


}
