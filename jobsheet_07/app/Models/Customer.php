<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'age',
        'email',
        'phone',
        'image',
        'address',
    ];

    protected $casts = [
        'age' => 'integer',
    ];
}
