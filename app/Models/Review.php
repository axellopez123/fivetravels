<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

     //TABLE
     protected $table = 'review';

     protected $fillable = [
         'title',
         'comment',
     ];
     //Primary Key
     protected $primaryKey = 'id';
}
