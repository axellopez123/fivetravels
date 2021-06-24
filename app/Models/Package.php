<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    //TABLE
    protected $table = 'package';

    protected $fillable = [
        'name',
        'description',
        'price',
        'dateOut',
        'dateArrive',
        'address',
    ];
    //Primary Key
    protected $primaryKey = 'id';
}
