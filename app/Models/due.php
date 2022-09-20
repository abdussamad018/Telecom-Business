<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class due extends Model
{
    //use HasFactory;

    protected $table='due';
    public $timestamps=false;
    public $fillable=[

        'customer_name',
        'purpose',
        'amount',
        'date',

    ];
}
