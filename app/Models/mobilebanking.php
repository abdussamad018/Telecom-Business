<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobilebanking extends Model
{
//    use HasFactory;

protected $table='mobilebanking';
public $timestamps=false;
public $fillable=[

    'bkash',
    'nagad',
    'rocket',
    'upay',
    'tap',
    'desco',
    'date',
];
}
