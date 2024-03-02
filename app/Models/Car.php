<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'cev',
        'csize',
        'cmodel',
        'cmaker',
        'cnum',
        'cmoney'
    ];



    // public function car()
    // {
    //     return $this->belongsTo(Car::class, 'cid');
    // }

}

