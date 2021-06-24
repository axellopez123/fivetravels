<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    //TABLE
    protected $table = 'destination';

    protected $fillable = [
        'name',
        'description',
        'qualification',
    ];
    //Primary Key
    protected $primaryKey = 'id';
}
