<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //TABLE
    protected $table = 'order';

    protected $fillable = [
        'paid',
        'deadline',
        'datePaid',
    ];
    //Primary Key
    protected $primaryKey = 'id';
}
