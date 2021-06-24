<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    //TABLE
    protected $table = 'reservation';

    protected $fillable = [
        'invoice',
        'datePaid',
    ];
    //Primary Key
    protected $primaryKey = 'id';
}
