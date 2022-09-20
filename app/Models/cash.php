<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cash extends Model
{
    //use HasFactory;

    protected $table='cash';
    public $timestamps=false;
    public $fillable=[

        'cash',
        'cashin',
        'date',
    ];
}
