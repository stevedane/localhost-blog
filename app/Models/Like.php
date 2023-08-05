<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_like';
  
    protected $fillable = [
        'id_post',
        'id_user',
        'id_com',
    ];

}
