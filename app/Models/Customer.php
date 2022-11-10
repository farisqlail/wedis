<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_developer',
        'id_user',
        'nama_project',
        'nama_customer',
        'dana',
        'kategori',
        'status',
        'keuntungan' 
    ];
}
