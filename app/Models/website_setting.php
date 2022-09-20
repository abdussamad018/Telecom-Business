<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class website_setting extends Model
{
//    use HasFactory;
    protected $table='website_setting';
    public $timestamps=false;
    public $fillable=[

        'shopname',
    ];
}
