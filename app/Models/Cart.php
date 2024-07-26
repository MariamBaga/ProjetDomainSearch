<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'items',
    ];

    protected $casts = [
        'items' => 'array', // Indique que la colonne 'items' est un tableau JSON
    ];
}
