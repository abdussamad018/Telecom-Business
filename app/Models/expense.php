<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
   // use HasFactory;

    protected $table='expense';
    public $timestamps=false;
    public $fillable=[

        'purpose',
        'amount',
        'date',
    ];
}
