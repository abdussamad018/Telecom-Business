<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
//    use HasFactory;

protected  $table='users';
public $timestamps=false;
public $fillable=[
    'name',
    'role',
    'email',
    'password',
    'status',

];
}
