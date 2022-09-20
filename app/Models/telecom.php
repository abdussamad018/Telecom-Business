<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telecom extends Model
{
    //use HasFactory;


    protected $table='telecom';
    public $timestamps=false;
    public $fillable=[

        'gp',
        'robi',
        'banglalink',
        'airtel',
        'teletalk',
        'paywell',
        'date',
    ];
}
