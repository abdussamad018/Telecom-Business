<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //use HasFactory;

    protected $table='customer';
    public $timestamps=false;
    public $fillable=[

        'customer_name',
        'phone',
        'address',

    ];
}
