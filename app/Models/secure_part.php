<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secure_part extends Model
{
    use HasFactory;
     protected $fillable = [
       'title',
       'phone',
       'image',
       'short_desc',
    ];
    
}
