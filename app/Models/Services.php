<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

     protected $fillable = [
       'name',
       'code',
       'image',
       'short_desc',
       'long_desc',
       'link',
     
    ];
}
