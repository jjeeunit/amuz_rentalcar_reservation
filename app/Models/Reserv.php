<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserv extends Model
{
    use HasFactory;

    protected $fillable = [
        'cid',
        'reservated_at',
        'started_at',
        'ended_at'
    ];

}
