<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buisness extends Model
{
    protected $fillable = [
        'name',
        'email',
        'cperson',
        'website',
        'phone',
        'address',
    ];

    use HasFactory;
}
